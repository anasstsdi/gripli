set :application, "kapstages"
set :domain,      "192.168.56.4"
set :user,     "vagrant"
default_run_options[:pty] = true
set :use_sudo,  true
set :deploy_to,   "/vagrant"
set :app_path,    "app"

set :repository,  "git@github.com:anasstsdi/kapstage.git"
set :scm,         :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`

set :model_manager, "doctrine"
# Or: `propel`

role :web,        domain                         # Your HTTP server, Apache/etc
role :app,        domain, :primary => true       # This may be the same as your `Web` server

set :shared_files,     ["app/config/parameters.yml"]
set :shared_children,  [app_path + "/logs", web_path + "/uploads"]

set :use_composer,   true
set :update_vendors, true

set  :keep_releases,  3

# Be more verbose by uncommenting the following line
# logger.level = Logger::MAX_LEVEL
