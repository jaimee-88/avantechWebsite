# avantechWebsite

Simple static website — HTML/CSS project.

How to use:

- Initialize git if needed: `git init`
- Commit: `git add . && git commit -m "Initial commit"`
- Create a GitHub repo and push (see below).

To publish to GitHub using the GitHub CLI:

```
gh repo create <name> --public --source=. --remote=origin --push
```

Or add a remote and push manually:

```
git remote add origin https://github.com/USERNAME/REPO.git
git branch -M main
git push -u origin main
```
