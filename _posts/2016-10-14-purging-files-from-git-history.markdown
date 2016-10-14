---
layout: "post"
title: "Purging files from Git history"
date: "2016-10-14 16:01"
---
Most developers, like me, use Git for versioning. Even for personal projects, it's great to have a history of files available. Deleting a file in git will cause it to remove from your working directory, while the file is still present in the history. Usually this is what you want, but sometimes you might want to remove a file completely including it's history.

There's a command for that but typically for git it's not exactly _intuitive_. To alter history, you can use the [filter-branch](https://git-scm.com/docs/git-filter-branch) command. Filter branch can be supplied with a filter, which is a shell command that's executed on each commit.
- To purge a file from history, as if it never existed execute:

  `git filter-branch -f --index-filter 'git rm  --cached --ignore-unmatch MYFILE public' HEAD`

  Where you can replace _MYFILE_ with one or more files you want to delete.
- If you want to purge a whole directory, including it's content, add the -r switch:

  `git filter-branch -f --index-filter 'git rm  --cached --ignore-unmatch MYDIRECTORY public' HEAD`

Great if you checked in a large file, or file in a public repository that shouldn't be public. For more information, read the git manual or the numerous tutorials that exist.
