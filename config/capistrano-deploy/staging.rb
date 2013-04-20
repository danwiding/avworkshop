server "polymathicmedia.com", :app
set :user, "marcycap"
set :use_sudo, false
set :port, 2222

set :application, "applicationname"
set :repository, "git repostiory"

set :deploy_to, "~/JuntoProjects/#{application}/staging/"
