$(function() {

    Morris.Line({
        element: 'morris-one-line-chart',
            data: [
                { year: '2008', value: 5 },
                { year: '2009', value: 10 },
                { year: '2010', value: 8 },
                { year: '2011', value: 22 },
                { year: '2012', value: 8 },
                { year: '2014', value: 10 },
                { year: '2015', value: 85 }
            ],
        xkey: 'year',
        ykeys: ['value'],
        resize: true,
        lineWidth:4,
        labels: ['Value'],
        lineColors: ['#1ab394'],
        pointSize:5,
    });

    Morris.Area({
        element: 'morris-area-chart',
        data: [
            { period: '2005', User: 2666, Visitor: 2294 },
            { period: '2006', User: 2778, Visitor: 2294},
            { period: '2007', User: 4912, Visitor: 1969},
            { period: '2008', User: 3767, Visitor: 3597},
            { period: '2009', User: 6810, Visitor: 1914 },
            { period: '2010', User: 5670, Visitor: 4293 },
            { period: '2011', User: 4820, Visitor: 3795},
            { period: '2012', User: 15073, Visitor: 5967 },
            { period: '2013', User: 10687, Visitor: 4460 },
            { period: '2014', User: 8432, Visitor: 5713},
            { period: '2015', User: 12666, Visitor: 8294 }

          ],

        xkey: 'period',
        ykeys: ['User', 'Visitor'],
        labels: ['User', 'Visitor'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true,
        lineColors: ['#87d6c6', '#54cdb4'],
        lineWidth:2,
        pointSize:5,
    });

    Morris.Area({
        element: 'morris-area-chart2',
        data: [

            { period2: '2005', Visitor: 2778 },
            { period2: '2006', Visitor: 4912 },
            { period2: '2007', Visitor: 3767 },
            { period2: '2008', Visitor: 6810 },
            { period2: '2009', Visitor: 5670 },
            { period2: '2010', Visitor: 4820 },
            { period2: '2011', Visitor: 7073 },
            { period2: '2012', Visitor: 10687 },
            { period2: '2013', Visitor: 11432 },
            { period2: '2014', Visitor: 9432 },
            { period2: '2015', Visitor: 14432 }
          ],
        xkey: 'period2',
        ykeys: ['Visitor'],
        labels: ['Visitor'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true,
        lineColors: ['#87d6c6'],
        lineWidth:2,
        pointSize:5,
    });

});
