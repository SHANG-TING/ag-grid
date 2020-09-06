<?php
$pageTitle = "Charts: Chart Customisation";
$pageDescription = "ag-Grid is a feature-rich data grid that can also chart data out of the box. Learn how to chart data directly from inside ag-Grid.";
$pageKeywords = "Javascript Grid Charting";
$pageGroup = "feature";
include '../documentation-main/documentation_header.php';
?>

<h1 class="heading-enterprise">Chart Customisation</h1>

<p class="lead">
    Chart themes can be used to customise the look and feel of your charts to match your application.
</p>

<p>
    ag-Charts support <a href="../javascript-charts-themes/">Themes</a> to change how charts are styled. You can
    provide your own custom chart theme to the grid to change the colours of charts along with other styling options.
    Alternatively, you can just provide overrides to change the provided themes in the way you want.
</p>

<h2>Chart Themes</h2>

<p>
    PLACEHOLDER
</p>

<h2>Custom Chart Themes</h2>

<p>
    You can create your own chart theme and provide it to the grid in the <code>customChartThemes</code> map on
    <code>gridOptions</code>. Your theme should then be specified in <code>chartThemes</code> to make it available to
    your users.
</p>

<?= createSnippet(<<<SNIPPET
gridOptions: {
    ...
    customChartThemes: {
        myCustomTheme: {
            baseTheme: 'ag-pastel',
            palette: {
                fills: ['#c16068', '#a2bf8a', '#ebcc87'],
                strokes: ['#874349', '#718661', '#a48f5f']
            },
            overrides: {
                common: {
                    title: {
                        fontSize: 22,
                        fontFamily: 'Arial, sans-serif'
                    }
                }
            }
        }
    },
    chartThemes: ['myCustomTheme', 'ag-vivid']
}
SNIPPET
) ?>

<p>
    The example below shows a custom chart theme being used with the grid. Note that other provided themes can be used
    alongside a custom theme, and are unaffected by the settings in the custom theme.
</p>

<?= grid_example('Custom Chart Theme', 'custom-chart-theme', 'generated', ['exampleHeight' => 660,'enterprise' => true]) ?>

<h2>Overriding Existing Themes</h2>

<p>
    Instead of providing a whole custom chart theme, you can instead supply just a set of theme overrides. These will be
    applied on top of every available theme. This can be useful for tweaking the style of your charts without having
    to provide a whole theme, or to make changes across multiple themes.
</p>

<?= createSnippet(<<<SNIPPET
gridOptions: {
    ...
    chartThemeOverrides: {
        common: {
            title: {
                fontSize: 22,
                fontFamily: 'Arial, sans-serif'
            }
        }
    }
}
SNIPPET
) ?>

<p>The following examples show different types of chart being customised using theme overrides.</p>

<h3>Example: Common Chart Overrides</h3>

<p>These overrides can be used with any chart type.</p>

<?= grid_example('Common Chart Overrides (processChartOptions)', 'common-overrides-old', 'generated', ['enterprise' => true]) ?>

<?= grid_example('Common Chart Overrides', 'common-overrides', 'generated', ['enterprise' => true]) ?>

<h3>Example: Cartesian Chart Overrides</h3>

<p>These overrides can be used with any cartesian chart.</p>

<?= grid_example('Cartesian Chart Overrides (processChartOptions)', 'cartesian-overrides-old', 'generated', ['enterprise' => true]) ?>

<?= grid_example('Cartesian Chart Overrides', 'cartesian-overrides', 'generated', ['enterprise' => true]) ?>

<h3>Example: Line Chart Overrides</h3>

<?= grid_example('Line Chart Overrides (processChartOptions)', 'line-overrides-old', 'generated', ['enterprise' => true]) ?>

<?= grid_example('Line Chart Overrides', 'line-overrides', 'generated', ['enterprise' => true]) ?>

<h3>Example: Bar/Column Chart Overrides</h3>

<?= grid_example('Bar/Column Chart Overrides (processChartOptions)', 'bar-overrides-old', 'generated', ['enterprise' => true]) ?>

<?= grid_example('Bar/Column Chart Overrides', 'bar-overrides', 'generated', ['enterprise' => true]) ?>

<h3>Example: Area Chart Overrides</h3>

<?= grid_example('Area Chart Overrides (processChartOptions)', 'area-overrides-old', 'generated', ['enterprise' => true]) ?>

<?= grid_example('Area Chart Overrides', 'area-overrides', 'generated', ['enterprise' => true]) ?>

<h3>Example: Scatter/Bubble Chart Overrides</h3>

<?= grid_example('Scatter/Bubble Chart Overrides (processChartOptions)', 'scatter-overrides-old', 'generated', ['enterprise' => true]) ?>

<?= grid_example('Scatter/Bubble Chart Overrides', 'scatter-overrides', 'generated', ['enterprise' => true]) ?>

<h3>Example: Pie/Doughnut Chart Overrides</h3>

<?= grid_example('Pie/Doughnut Chart Overrides (processChartOptions)', 'pie-overrides-old', 'generated', ['enterprise' => true]) ?>

<?= grid_example('Pie/Doughnut Chart Overrides', 'pie-overrides', 'generated', ['enterprise' => true]) ?>

<h3>Example: Histogram Chart Overrides</h3>

<?= grid_example('Histogram Chart Overrides (processChartOptions)', 'histogram-overrides-old', 'generated', ['enterprise' => true]) ?>

<?= grid_example('Histogram Chart Overrides', 'histogram-overrides', 'generated', ['enterprise' => true]) ?>

<?php include '../documentation-main/documentation_footer.php'; ?>