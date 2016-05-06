<?php namespace Radiantweb\Disqus\Components;

use Cms\Classes\ComponentBase;
use Request;
use Radiantweb\Disqus\Models\Settings as DisqusSettingsModel;

class Disqus extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Disqus',
            'description' => 'Displays Disqus Comments on the page.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){
        // Core
        $this->page['disqusSite'] = DisqusSettingsModel::get('disqussite'); 
        $this->page['disqusProtocol'] = DisqusSettingsModel::get('disqusprotocol'); 
        $this->page['disqusDeveloperMode'] = DisqusSettingsModel::get('disqusdevmode'); 
        
        // Javascript functions
        $this->page['preData'] = (!empty(DisqusSettingsModel::get('preData'))) 
                                ? DisqusSettingsModel::get('preData') : null; 
        $this->page['preInit'] = (!empty(DisqusSettingsModel::get('preInit'))) 
                                ? DisqusSettingsModel::get('preInit') : null; 
        $this->page['onInit'] = (!empty(DisqusSettingsModel::get('onInit'))) 
                                ? DisqusSettingsModel::get('onInit') : null;
        $this->page['afterRender'] = (!empty(DisqusSettingsModel::get('afterRender'))) 
                                ? DisqusSettingsModel::get('afterRender') : null; 
        $this->page['onReady'] = (!empty(DisqusSettingsModel::get('onReady'))) 
                                ? DisqusSettingsModel::get('onReady') : null; 
        $this->page['onNewComment'] = (!empty(DisqusSettingsModel::get('onNewComment'))) 
                                ? DisqusSettingsModel::get('onNewComment') : null;
        $this->page['preReset'] = (!empty(DisqusSettingsModel::get('preReset'))) 
                                ? DisqusSettingsModel::get('preReset') : null; 
        $this->page['onPaginate'] = (!empty(DisqusSettingsModel::get('onPaginate'))) 
                                ? DisqusSettingsModel::get('onPaginate') : null; 
        $this->page['onIdentify'] = (!empty(DisqusSettingsModel::get('onIdentify'))) 
                                ? DisqusSettingsModel::get('onIdentify') : null;
        $this->page['beforeComment'] = (!empty(DisqusSettingsModel::get('beforeComment'))) 
                                ? DisqusSettingsModel::get('beforeComment') : null;
        
    }
}