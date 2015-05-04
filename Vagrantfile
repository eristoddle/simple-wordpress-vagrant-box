# -*- mode: ruby -*-
# vi: set ft=ruby :
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu/trusty64"
  config.vm.network "private_network", ip: "192.168.4.20"
  config.vm.hostname = 'wordpress.local'

  config.vm.network "forwarded_port", guest: 80, host: 8000
  config.vm.network "forwarded_port", guest: 3306, host: 33060

  config.vm.synced_folder "./wordpress", "/var/www/html", id: "vagrant-root", group: "www-data", :mount_options =>  ["dmode=777","fmode=666"]

  config.vm.provider "virtualbox" do |vb|
    vb.name = 'wordpress-box'
    vb.customize ["modifyvm", :id, "--memory", "512"]
    vb.customize ["modifyvm", :id, "--cpus", "1"]
    vb.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
    vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    vb.customize ["modifyvm", :id, "--ostype", "Ubuntu_64"]
  end

  config.vm.provision :shell, :path => "provision/shell/install_init.sh"
  config.vm.provision :shell, :path => "provision/shell/install_apache.sh"
  config.vm.provision :shell, :path => "provision/shell/install_mysql.sh"
  config.vm.provision :shell, :path => "provision/shell/install_php.sh"
  config.vm.provision :shell, :path => "provision/shell/create_virtualhost.sh"
end
