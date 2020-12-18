<?php
namespace FREESIXTYFIVE\FsfZollerSlider\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author David Geib <d.geib@freesixtyfive.de>
 */
class SliderControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \FREESIXTYFIVE\FsfZollerSlider\Controller\SliderController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\FREESIXTYFIVE\FsfZollerSlider\Controller\SliderController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllSlidersFromRepositoryAndAssignsThemToView()
    {

        $allSliders = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $sliderRepository = $this->getMockBuilder(\FREESIXTYFIVE\FsfZollerSlider\Domain\Repository\SliderRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $sliderRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSliders));
        $this->inject($this->subject, 'sliderRepository', $sliderRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('sliders', $allSliders);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
