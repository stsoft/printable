<?

Yii::import('zii.widgets.CPortlet');

class YumAdminMenu extends CPortlet {
	public function init() {
		/*$this->title = sprintf('%s <br /> %s: %s',
				Yum::t('Usermenu'),
				Yum::t('Logged in as'),
				Yii::app()->user->data()->username);
                 */
		$this->contentCssClass = '';
                $this->htmlOptions = array("class" => "");
		return parent::init();
	}

	public function run() {
            /*
		$this->widget('YumMenu', array(
					'items' => $this->getMenuItems()
					));
*/
            $this->widget('bootstrap.widgets.TbMenu', array(
                'type'=>'list',
                'items' => $this->getMenuItemsBootstrap()
            ));
		parent::run();
	}
        
        public function getMenuItemsBootstrap() {
		return array(
                        array('label'=>'Users', 'itemOptions'=>array('class'=>'nav-header')),
                        array('label'=> 'Statistics', 'url'=>array('//user/statistics/index')),
                        array('label' => 'User administration', 'url' => array('//user/user/admin')),
                        array('label' => 'Avatar administration', 'url' => array('//avatar/avatar/admin'), 'visible' => Yum::hasModule('avatar')),
                        array('label' => 'Create new user', 'url' => array('//user/user/create')),
                        array('label' => 'Generate Demo Data', 'url' => array('//user/user/generateData'), 'visible' => Yum::module()->debug),
                        
			array('label'=>'Roles / Access control', 'itemOptions'=>array('class'=>'nav-header'), 'active' => Yii::app()->controller->id == 'role' || Yii::app()->controller->id == 'permission' || Yii::app()->controller->id == 'action', 'visible' => Yum::hasModule('role')),
                        array('label' => 'Roles', 'url' => array('//role/role/admin'), 'visible' => Yum::hasModule('role')),
                        array('label' => 'Create new role', 'url' => array('//role/role/create'), 'visible' => Yum::hasModule('role')),
                        array('label' => 'Permissions', 'url' => array('//role/permission/admin'), 'visible' => Yum::hasModule('role')),
                        array('label' => 'Grant permission', 'url' => array('//role/permission/create'), 'visible' => Yum::hasModule('role')),
                        array('label' => 'Actions', 'url' => array('//role/action/admin'), 'visible' => Yum::hasModule('role')),
                        array('label' => 'Create new action', 'url' => array('//role/action/create'), 'visible' => Yum::hasModule('role')),
                        
                        array('label'=>'Membership', 'itemOptions'=>array('class'=>'nav-header'), 'visible' => Yum::hasModule('membership')),
                        array('label' => 'Ordered memberships', 'url' => array('//membership/membership/admin'), 'visible' => Yum::hasModule('membership')),
                        array('label' => 'Payment types', 'url' => array('//membership/payment/admin'), 'visible' => Yum::hasModule('membership')),
                        array('label' => 'Create new payment type', 'url' => array('//membership/payment/create'), 'visible' => Yum::hasModule('membership')),
                        
                        array('label'=>'Profiles', 'itemOptions'=>array('class'=>'nav-header'), 'visible' => Yum::hasModule('profile')),
                        array('label' => 'Profil anzeigen', 'url' => array('//profile/profile/view'),'visible' => Yum::hasModule('profile')),
                        array('label' => 'Manage profiles', 'url' => array('//profile/profile/admin'),'visible' => Yum::hasModule('profile')),
                        array('label' => 'Show profile visits', 'url' => array('//profile/profile/visits'),'visible' => Yum::hasModule('profile')),
                        array('label' => 'Manage profile fields', 'url' => array('//profile/fields/admin'),'visible' => Yum::hasModule('profile')),
                        array('label' => 'Create profile field', 'url' => array('//profile/fields/create'),'visible' => Yum::hasModule('profile')),
                    
                        array('label' => 'Messages', 'itemOptions'=>array('class'=>'nav-header'), 'visible' => Yum::hasModule('message')),
                        array('label' => 'Admin inbox', 'url' => array('/message/message/index'), 'visible' => Yum::hasModule('message')),
                        array('label' => 'Sent messages', 'url' => array('/message/message/sent'), 'visible' => Yum::hasModule('message')),
                        array('label' => 'Write a message', 'url' => array('/message/message/compose'), 'visible' => Yum::hasModule('message')),
                    
                        array('label' => 'Misc', 'itemOptions'=>array('class'=>'nav-header'), array('label' => 'Text translations', 'url' => array('//user/translation/admin'))),
                        array('label' => 'Upload avatar for admin', 'url' => array('//avatar/avatar/editAvatar'), 'visible' => Yum::hasModule('avatar')),
                        array('label' => 'Change admin Password', 'url' => array('//user/user/changePassword')),
                        array('label' => 'Logout', 'url' => array('//user/user/logout')),
							
                );
	}

	public function getMenuItems() {
		return array(
				array('label'=>'Users', 'items' => array(
						array('label'=> 'Statistics', 'url'=>array('//user/statistics/index')),
						array('label' => 'User administration', 'url' => array('//user/user/admin')),
						array('label' => 'Avatar administration', 'url' => array('//avatar/avatar/admin'), 'visible' => Yum::hasModule('avatar')),
						array('label' => 'Create new user', 'url' => array('//user/user/create')),
						array('label' => 'Generate Demo Data', 'url' => array('//user/user/generateData'), 'visible' => Yum::module()->debug),
						)
					),
				array('label'=>'Roles / Access control', 'active' => Yii::app()->controller->id == 'role' || Yii::app()->controller->id == 'permission' || Yii::app()->controller->id == 'action', 'visible' => Yum::hasModule('role'), 'items' => array(
						array('label' => 'Roles', 'url' => array('//role/role/admin')),
						array('label' => 'Create new role', 'url' => array('//role/role/create')),
						array('label' => 'Permissions', 'url' => array('//role/permission/admin')),
						array('label' => 'Grant permission', 'url' => array('//role/permission/create')),
						array('label' => 'Actions', 'url' => array('//role/action/admin')),
						array('label' => 'Create new action', 'url' => array('//role/action/create')),
						)
					),
				array('label'=>'Membership', 'visible' => Yum::hasModule('membership'), 'items' => array(
						array('label' => 'Ordered memberships', 'url' => array('//membership/membership/admin')),
						array('label' => 'Payment types', 'url' => array('//membership/payment/admin')),
						array('label' => 'Create new payment type', 'url' => array('//membership/payment/create')),
						)
					),
				array('label'=>'Profiles',
						'visible' => Yum::hasModule('profile'),
						'items' => array(
							array('label' => 'Manage profiles', 'url' => array('//profile/profile/admin')),
							array('label' => 'Show profile visits', 'url' => array('//profile/profile/visits')),
							array('label' => 'Manage profile fields', 'url' => array('//profile/fields/admin')),
							array('label' => 'Create profile field', 'url' => array('//profile/fields/create')),
							)
						),
				array('label' => 'Messages',
						'visible' => Yum::hasModule('message'),
						'items' => array (
							array('label' => 'Admin inbox', 'url' => array('/message/message/index')),
							array('label' => 'Sent messages', 'url' => array('/message/message/sent')),
							array('label' => 'Write a message', 'url' => array('/message/message/compose')),
							),
						),
				array('label' => 'Misc', 'items' => array(
				array('label' => 'Text translations', 'url' => array('//user/translation/admin')),
							array('label' => 'Upload avatar for admin', 'url' => array('//avatar/avatar/editAvatar'),
								'visible' => Yum::hasModule('avatar')),
							array('label' => 'Change admin Password', 'url' => array('//user/user/changePassword')),
							array('label' => 'Logout', 'url' => array('//user/user/logout')),
							)
						),
				);

	}
}
?>






