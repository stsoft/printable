<?
Yii::import('application.modules.user.UserModule');
Yii::import('zii.widgets.CPortlet');

class ProfileVisitWidget extends CPortlet
{
	public $decorationCssClass = 'nav-header nav-header';

	public function init() {
		if(!Yum::module('profile')->enableProfileVisitLogging)
			return false;

		$this->title='Profile visits';
                $this->titleCssClass = '';
                $this->contentCssClass = "profile-visits";
		if(Yii::app()->user->isGuest)
			return false;

		parent::init();
	}

	protected function renderContent()
	{
                
		if(!Yum::module('profile')->enableProfileVisitLogging)
			return false;
                
		parent::renderContent();
		if(Yii::app()->user->isGuest)
			return false;

			$this->render('profile_visits', array(
						'visits' => Yii::app()->user->data()->visits));
	}
} 
?>
