untracked - new files that git dosent yet track
modified - changed
staged - file is ready to be commited 
unmodified - unchanged

add - adds new or changed files in your working directory to the git staging area. - #git add <-file name ->             #gid add . - adds all files
commit - it isthe record of change - #git commit -m "some message"

//untracked - add(staging) - unmodified

push - upload local repo content to remote repo  => #git push origin main

To make a new repository:
Init Command:
mkdir Local Repo - to make a new reposetory => git init
git remote add origin <-link->              => to make the new repo the orighin one
git remote -v
git branch (to check branch)
git brach -M main (to rename branch)
git push origin main            git push -u origin - From here on I want to push all the repos in the origin repo itself.

go to git hub repositories and enter the repository name

github repo => clone => changes => add => commit => push

branch commands:
#git branch (to check branch)
#git branch -M main (to rename branch)
#git checkout <-branch name-> (to navigate)
#git checkout <-new branch name-> (to create new branch)
#git branch -d <-branch name -> (to delete branch)

merging code:
way1:
git diff <-branch name-> (to compare commits, branches, files & more)
git merge <-branch name-> (to merge 2 branches)

way2:
create a PR(pull requests)

pull command:
#git pull origin main (used to fetch and download content from a remote repo and immediately update the local repo to match that content.)

undo changes:
case1: staged changes 
#git reset <-file name->
#git reset

case2:commited changes (for one commit)
#git reset HEAD-1

case 3: commited changes(for many commits)
#git reset<-commit hash->
#git reset --hard<-commit hash->