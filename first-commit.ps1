param(
    [switch]$InstallIfMissing,
    [switch]$CreateGitHubRepo,
    [string]$RepoName = "",
    [switch]$Private
)

function Command-Exists {
    param($name)
    return (Get-Command $name -ErrorAction SilentlyContinue) -ne $null
}

Write-Host "Running first-commit script in: $(Get-Location)"

if (-not (Command-Exists git)) {
    if ($InstallIfMissing) {
        Write-Host "Git not found - attempting to install via winget..."
        winget install --id Git.Git -e --source winget
        Start-Sleep -Seconds 2
        if (-not (Command-Exists git)) {
            Write-Error "Git install failed or winget not available. Install Git manually and rerun."
            exit 1
        }
    } else {
        Write-Error "Git is not installed. Rerun with -InstallIfMissing to attempt installation."
        exit 1
    }
}

if (-not (Test-Path .git)) {
    Write-Host "Initializing new git repository..."
    git init
} else {
    Write-Host "Repository already initialized (found .git)."
}

Write-Host "Staging files..."
git add .

$status = git status --porcelain
if ([string]::IsNullOrWhiteSpace($status)) {
    Write-Host "No changes to commit."
} else {
    Write-Host "Creating initial commit..."
    git branch -M main 2>$null | Out-Null
    git commit -m "Initial commit"
    if ($LASTEXITCODE -ne 0) { Write-Host "Commit failed or nothing to commit." }
}

if ($CreateGitHubRepo) {
    if (-not (Command-Exists gh)) {
        Write-Error "GitHub CLI 'gh' not found. Install it or create the repo manually."
        exit 1
    }
    if ([string]::IsNullOrWhiteSpace($RepoName)) {
        Write-Error "Provide a repo name via -RepoName when using -CreateGitHubRepo."
        exit 1
    }
    $visibility = if ($Private) { "--private" } else { "--public" }
    Write-Host "Creating GitHub repo '$RepoName' and pushing..."
    gh repo create $RepoName $visibility --source=. --remote=origin --push
}

Write-Host "Done."
