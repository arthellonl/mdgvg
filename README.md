# Notes

* Uses Grav CMS

# Deployment

Workflow for deployment to production server:

1. Clone repo if necessary / Fetch from staging branch if necessary
2. Develop on local environment
3. Push to staging branch
4. Switch to master branch
5. Merge staging branch into master branch

* On push to staging branch, Github Action starts to upload files to staging site.
* On merge from staging branch into master branch, Github Action starts to upload files to production site.
* Manually upload files/folders included in .gitignore file to server via ftp.
