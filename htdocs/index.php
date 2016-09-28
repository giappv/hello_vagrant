<!DOCTYPE html>
<html>
    <head>
        <title>Hello Vagrant, a replacement of XAMPP for PHP Developers</title>
        <style>
            html {
                background: url("vagrant.png") no-repeat center center fixed ;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover; 
            }
        </style>
    </head>
    <body>
        <h1 style="color: #2490cc;">Congratulations! </h1>
        <h3>Vagrant has just helped you to build a Linux Ubuntu Trusty 64 Virtual Machine with Apache, PHP and MySQL installed</h3>
        <p><i>There are some vagrant commands that you use it frequently, <br/> you must stay at <code>/path to this project folder/devops/vagrant</code> to run them</i></p>
        <code>$ cd hello_vagrant/devops/vagrant</code>
        <h4>To start or power on a virtual machine</h4>
        <code>
            $ vagrant up
        </code>
        
        <h4>To login to your virtual machine</h4>
        <code>
            $ vagrant ssh
        </code>

        <h4>To provision your virtual machine</h4>
        <code>
            $ vagrant provision
        </code>
        <h4>To power off your virtual machine</h4>
        <code>
            $ vagrant halt
        </code>

        <h4>To destroy your virtual machine</h4>
        <code>
            $ vagrant destroy -f
        </code>

        <h4>Some notes for PHP developers:</h4>
        <ul>
            <li>PHP source code is stored in <code>/path to this project folder/htdocs</code> and it is synced to <code>/vagrant/htdocs</code> folder inside virtual machine</li>
            <li>What you are looking at is output of <code>/path to this project folder/htdocs/index.php</code></li>            
            <li>I used <a href="https://www.ansible.com/" target="_blank">Ansible</a> to provision this VM</li>
            <li>MySQL, Apache configurations are placed at <code>devops/ansible/vars/all.yml</code></li>
        </ul>
    </body>
</html> 