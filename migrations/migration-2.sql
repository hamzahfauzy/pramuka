INSERT INTO roles (id, name) VALUES (2,'Admin'),(3,'User');
INSERT INTO role_routes (role_id, route_path) VALUES 
(1,'*'),
(2,'crud/index?table=sekolah'),
(2,'crud/edit?table=sekolah'),
(2,'crud/delete?table=sekolah'),
(2,'crud/create?table=sekolah'),
(2,'users/user'),
(2,'users/create'),
(2,'users/edit'),
(2,'users/delete'),
(2,'users/verification'),
(2,'users/reset-password'),
(2,'users/detail'),
(2,'users/export'),
(2,'default/index'),
(2,'default/profile'),
(2,'crud/index?table=sertifikat'),
(2,'crud/edit?table=sertifikat'),
(2,'crud/delete?table=sertifikat'),
(2,'crud/index?table=pramuka'),
(2,'crud/edit?table=pramuka'),
(2,'crud/delete?table=pramuka'),
(3,'crud/index?table=sertifikat'),
(3,'crud/create?table=sertifikat'),
(3,'crud/edit?table=sertifikat'),
(3,'crud/delete?table=sertifikat'),
(3,'pramuka/index'),
(3,'default/index'),
(3,'biodata'),
(3,'default/profile');