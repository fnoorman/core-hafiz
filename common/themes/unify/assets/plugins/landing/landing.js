/**
 * Created by Fahmy on 9/14/15.
 */

function getMorePackages(url)
{

    document.getElementById('myList').innerHTML='';
    $('#loadMore').hide();
    $.ajax({
        method: "GET",
        url: url,

    }).done(function( html ) {
        var myList = document.getElementById('myList');
        myList.innerHTML = html;
        $('#myList').slideDown(100);
    });
}

function removePackages()
{
    document.getElementById('myList').innerHTML='';
    $('#loadMore').show()
}

