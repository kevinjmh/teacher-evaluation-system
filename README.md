teacher-evaluation-system
=========================

暨南大学每年都有对课程教师的评价，为了降低操作重复性，提供便捷交互，保证数据的完整统一，采用信息管理系统实现相应功能，该系统至少应实现如下功能：

* a. 教务老师可以管理每学期的课程，包括修改、增加、删除、修改课程
* b. 教务老师可以对用户进行管理，包括删除用户，修改用户权限，更改同步用户信息
* c. 每位任课教师可以在系统中增加多门课程并管理相应课程信息
* d. 学生可以参加多个班级的课程
* e. 学生在学期结束后可以参与对所选课程评价
* f. 所有用户都可以修改自己的个人信息


##需求细节

* a. 系统可以对不同用户设定相应权限，防止非法操作
* b. 页面渲染使用 xml 和 xlst 技术
* c. 优化数据结构，支持xml 数据库
* d. 数据表要支持对应列表项的跳转
* e. 对用户输入信息的有效性进行相应的校验
* f. 保证数据增加修改删除的一致性

###NOT for now

SAE [TestSite](http://kevinjmh.sinaapp.com/login.html) (目前SAE还在用php5.3.29，所以登录的时候会有问题)
