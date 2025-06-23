# Git & GitHub Setup Guide for PHP Projects

Follow these steps to set up Git and GitHub for your PHP development workflow.

---

## 1. Install Git

- **Windows:** [Download Git for Windows](https://git-scm.com/download/win)
- **macOS:**  
    ```sh
    brew install git
    ```
- **Linux:**  
    ```sh
    sudo apt update
    sudo apt install git
    ```

---

## 2. Configure Git (One Time)

Replace the placeholders with your actual name and email:

```sh
git config --global user.name "Your Name"
git config --global user.email "your@email.com"
```

---

## 3. Create a GitHub Account & Repository

1. Go to [GitHub](https://github.com) and sign up (if you don't have an account).
2. After signing in, click **"New repository"** and create a new repo (public or private).

---

## 4. Connect Your Local Project to GitHub

```sh
cd your-project-folder
git init
git remote add origin https://github.com/your-username/your-repo.git
```

---

## 5. Basic Git Commands

- **Check status:**  
    ```sh
    git status
    ```
- **Stage all files:**  
    ```sh
    git add .
    ```
- **Commit changes:**  
    ```sh
    git commit -m "First commit"
    ```
- **Push to GitHub:**  
    ```sh
    git push -u origin main
    ```

---

## 6. Clone an Existing Repository

```sh
git clone https://github.com/username/repo.git
```

---

You’re all set! You can now use Git and GitHub for your PHP projects.
