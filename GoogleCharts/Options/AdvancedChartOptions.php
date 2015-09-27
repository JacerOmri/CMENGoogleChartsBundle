<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

/**
 * @author Christophe Meneses
 */
class AdvancedChartOptions extends MediumChartOptions
{
    /**
     * A theme is a set of predefined option values that work together to achieve a specific chart behavior or visual
     * effect. Currently only one theme is available :
     * 'maximized' - Maximizes the area of the chart, and draws the legend and all of the labels inside the chart area.
     *   Sets the following options:
     *   chartArea: {width: '100%', height: '100%'},
     *   legend: {position: 'in'},
     *   titlePosition: 'in', axisTitlesPosition: 'in',
     *   hAxis: {textPosition: 'in'}, vAxis: {textPosition: 'in'}
     *
     * @var string
     */
    protected $theme;

    /**
     * Where to place the chart title, compared to the chart area. Supported values:
     * in - Draw the title inside the chart area.
     * out - Draw the title outside the chart area.
     * none - Omit the title.
     *
     * @var string
     */
    protected $titlePosition;


    /**
     * @param string $theme
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    /**
     * @param string $titlePosition
     */
    public function setTitlePosition($titlePosition)
    {
        $this->titlePosition = $titlePosition;
    }
}