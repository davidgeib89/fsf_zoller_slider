<?php
namespace FREESIXTYFIVE\FsfZollerSlider\Controller;


/***
 *
 * This file is part of the "Zoller Slider" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 David Geib <d.geib@freesixtyfive.de>, FREESIXTYFIVE
 *
 ***/
/**
 * SliderController
 */
class SliderController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * sliderRepository
     * 
     * @var \FREESIXTYFIVE\FsfZollerSlider\Domain\Repository\SliderRepository
     */
    protected $sliderRepository = null;

    /**
     * @param \FREESIXTYFIVE\FsfZollerSlider\Domain\Repository\SliderRepository $sliderRepository
     */
    public function injectSliderRepository(\FREESIXTYFIVE\FsfZollerSlider\Domain\Repository\SliderRepository $sliderRepository)
    {
        $this->sliderRepository = $sliderRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $sliders = $this->sliderRepository->findAll();
        $this->view->assign('sliders', $sliders);
    }
}
