create user 'sysadmin'@'localhost' identified by 'sysadmin123';
grant all privileges on SysAdmin.* to 'sysadmin'@'localhost' identified by 'sysadmin123';

create table website (
content_id int unsigned auto_increment primary key,
title varchar(255),
tag varchar(255),
text longtext,
file varchar(255)
);

insert into website (title, tag, text, file) values ("Project Overview", "overview", "<h3>Overview</h3>
<p class='text-left' style='text-indent: 40px'>We are implementing Single Sign On.

We have a working build with LDAP in the sense that an active directory user can log into nextcloud using their AD information.

We have ADFS kinda working. We still have some errors to work through though.</p>", "index.php");

insert into website (title, tag, text, file) values ("Screenshots", "sc", "<p class='text-left' style='text-indent: 40px'>This is a list of all of our gathered screenshots.</p>", "screenshots.php");

insert into website (title, tag, text, file) values ("Team Members and Roles", "team", "<h3>Team Members</h3>
<ul>
<li>Vince Chu
<li>Dante Gennero
<li>Mitchell Parker
</ul>&nbsp;
<h3>Team Roles</h3>
<p class='text-left' style='text-indent: 40px'>Vince took over as Domain Controller, since he had more knowledge and experience in this type of environment. He handled most of the heavy lifting and configuration for our project.
  Dante assisted Vince and helped him implement our features.
  Mitchell worked on creating the website.
", "team.php");

insert into website (title, tag, text, file) values ("How to Access", "access", "Some more text", "access.php");

insert into website (title, tag, text, file) values ("How to Setup", "setup", "And yet some more", "setup.php");

