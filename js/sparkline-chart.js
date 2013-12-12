var Script = function () {

//sparkline chart
        
        $("#linechart").sparkline([23, 98, 90], {
            type: 'line',
            width: '100%',
            height: '75',
            fillColor: '',
            lineColor: '#fff',
            lineWidth: 2,
            spotColor: '#fff',
            minSpotColor: '#fff',
            maxSpotColor: '#fff',
            highlightSpotColor: '#fff',
            highlightLineColor: '#ffffff',
            spotRadius: 8,
            highlightLineColor: '#ffffff'
    //        tooltipFormat: '<span style="display:block; padding:0px 10px 12px 0px;">' +
    //            '<span style="color: {{color}}">&#9679;</span> {{offset:names}} ({{percent.1}}%)</span>'

        });

    //sparkline chart
        $("#linechart-2").sparkline([23, 98, 90], {
            type: 'line',
            width: '100%',
            height: '75',
            fillColor: '',
            lineColor: '#fff',
            lineWidth: 2,
            spotColor: '#fff',
            minSpotColor: '#fff',
            maxSpotColor: '#fff',
            highlightSpotColor: '#fff',
            highlightLineColor: '#ffffff',
            spotRadius: 8,
            highlightLineColor: '#ffffff'
    //        tooltipFormat: '<span style="display:block; padding:0px 10px 12px 0px;">' +
    //            '<span style="color: {{color}}">&#9679;</span> {{offset:names}} ({{percent.1}}%)</span>'

        });
}();
