create table tb_status(
	id int not null primary key auto_increment,
    status varchar(25) not null
);

insert into tb_status(status)values('pending');
insert into tb_status(status)values('accomplished');

create table tb_tasks(
	id int not null primary key auto_increment,
    id_status int not null default 1,
    foreign key(id_status) references tb_status(id),
	task text not null,
    data_register datetime not null default current_timestamp
)