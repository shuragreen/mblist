# mblist

# get the assembly from the public repository
'https://github.com/shuragreen/mblist.git'

# If it is packed, then unpack the project and go to the directory where it is located
'cd path/mblist' 

# It's a little rough here. Because we enter the data through phpAdmin in advance,
# then we have to share the finished database with an unreasonably large file
# (the limit of a free account in GitHUB is 25M)
'unpack mysql/ib_logfile0.rar'

# After starting Docker build and run the services
'docker-compose up -d'

# This is the first docker-code for me. Although it didn't include any encryption, to write
# and debug the code it took me a whole day. And another day dealt with comments in English
# and studying GitHUB.
# The project can be replaced with any script that uses mysql, having previously structured
# the database through phpAdmin. Or include structuring in the script itself. Didn't make a
# long code, because the main idea was to show the launch and interaction of services in
# different containers. Also wanted to show what do all the time, including experience with
# Photoshop and stuff like that!