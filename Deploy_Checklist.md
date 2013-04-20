[] Create the sensitive configuration file for the wp-sensitive-staging on the deploy ftp server at /remoteftp/junto/projects/{project}/sensitiveconfig
[] Create the sensitive configuration file for the wp-sensitive-production on the deploy ftp server at /remoteftp/junto/projects/{project}/sensitiveconfig
[] Check that the deploy stage files are correct
[] Make sure a wp-sensitive-{stage} file exists
[] Make sure a db exists for the stage, create one if needed
[] Create directory for project
[] Run cap {stage} deploy:InitializeServer
[] Set up addon domain to point to new wordpress install
[] Create db via wordpress autoinstaller
[] Activate theme