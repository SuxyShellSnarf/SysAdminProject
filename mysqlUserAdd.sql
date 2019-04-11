create user 'sysadmin'@'localhost' identified by 'sysadmin123';
grant all privileges on SysAdmin.* to 'sysadmin'@'localhost' identified by 'sysadmin123';

create table website (
content_id int unsigned auto_increment primary key,
title varchar(255),
tag varchar(255),
text varchar(255),
file varchar(255)
);

insert into website (title, tag, text, file) values ("Project Overview", "overview", "Some text", "index.php");

insert into website (title, tag, text, file) values ("Screenshots", "sc", "<p>This is a list of all of our gathered screenshots.</p>", "screenshots.php");

insert into website (title, tag, text, file) values ("Team Members and Roles", "team", "<h3>Team Members</h3>
<ul>
<li>Vince Chu
<li>Dante Gennero
<li>Mitchell Parker
</ul>
", "team.php");

insert into website (title, tag, text, file) values ("How to Access", "access", "Some more text", "access.php");

insert into website (title, tag, text, file) values ("How to Setup", "setup", "And yet some more", "setup.php");
