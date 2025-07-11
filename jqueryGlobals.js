// WidgetKey can be obtained from your account
var widgetKey = '78c11f8b5862f26af680191f693578c72a132c382dd40040a41c67ff66fbcfbf';
// Store widgetKey in sessionStorage
sessionStorage.setItem('widgetKey', widgetKey);

// Function that prevent click to acces link href
function windowPreventOpening() {
    $(this).click(function(event) {
        event.preventDefault();
    });
}

// Function that open new window for Match Details
function windowOpenMatch(event_key, leagueLogo, fixturesDate, countryName, leagueName, homeTeam, awayTeam) {

    sessionStorage.setItem('matchDetailsKey', event_key);

    if (leagueLogo != '') {
        sessionStorage.setItem('leagueLogo', leagueLogo);
    }

    var generatedLink = countryName+'/'+leagueName+'/'+homeTeam+'-vs-'+awayTeam+'/'+fixturesDate+'/'+event_key;
    var newGeneratedLink = generatedLink.replace(/\s/g,'-');

    sessionStorage.setItem('fixturesDate', fixturesDate);
    var winLoc = $(location).attr("href");
    winLoc = winLoc.replace('index.html', '');
    winLoc = winLoc.replace('widgetLeagueInfo.html', '');
    var WindowNW = window.open(
        winLoc + 'widgetMatchResults.html?'+newGeneratedLink+'',
        "_blank",
        "width=870, height=650");

}

// Function that open new window for League Info
function windowOpenLeagueInfo(leagueId, leagueName, leagueLogo) {

    sessionStorage.setItem('leagueInfoKey', leagueId);
    sessionStorage.setItem('leagueInfoName', leagueName);

    if (leagueLogo != '') {
        sessionStorage.setItem('leagueInfoLogo', leagueLogo);
    }

    var winLoc = $(location).attr("href");
    winLoc = winLoc.replace('index.html', '');
    var WindowNW = window.open(
        winLoc + 'widgetLeagueInfo.html',
        "_blank",
        "width=700, height=650");

}

// Function that comapare times
function naturalCompare(a, b) {
    var ax = [],
        bx = [];

    if (a && b) {
    a['time'].replace(/(\d+)|(\D+)/g, function(_, $1, $2) {
        ax.push([$1 || Infinity, $2 || ""])
    });
    b['time'].replace(/(\d+)|(\D+)/g, function(_, $1, $2) {
        bx.push([$1 || Infinity, $2 || ""])
    });
    }

    while (ax.length && bx.length) {
        var an = ax.shift();
        var bn = bx.shift();
        var nn = (an[0] - bn[0]) || an[1].localeCompare(bn[1]);
        if (nn) return nn;
    }

    return ax.length - bx.length;
}

// Function that sort ascendent by league round
function groupSortingAsc(a, b) {
    var ax = [],
        bx = [];

    a['league_round'].replace(/(\d+)|(\D+)/g, function(_, $1, $2) {
        ax.push([$1 || Infinity, $2 || ""])
    });
    b['league_round'].replace(/(\d+)|(\D+)/g, function(_, $1, $2) {
        bx.push([$1 || Infinity, $2 || ""])
    });

    while (ax.length && bx.length) {
        var an = ax.shift();
        var bn = bx.shift();
        var nn = (an[0] - bn[0]) || an[1].localeCompare(bn[1]);
        if (nn) return nn;
    }

    return ax.length - bx.length;
}

// Function that group by
var groupBy = function(xs, key) {
    return xs.reduce(function(rv, x) {
        (rv[x[key]] = rv[x[key]] || []).push(x);
        return rv;
    }, {});
};

// Function that sort by key descendent
function sortByKeyDesc(array, key) {
    return array.sort(function(a, b) {
        var x = a[key];
        var y = b[key];
        return ((x > y) ? -1 : ((x < y) ? 1 : 0));
    });
}

// Function that sort by key ascendent
function sortByKeyAsc(array, key) {
    return array.sort(function(a, b) {
        var x = a[key];
        var y = b[key];
        return ((x < y) ? -1 : ((x > y) ? 1 : 0));
    });
}

// Function that sort by key
function sortByKey(array, key) {
    return array.sort(function(a, b) {
        var x = a[key];
        var y = b[key];
        return ((x < y) ? -1 : ((x > y) ? 1 : 0));
    });
}

// Function for Match Details css, js and widget activation
var isWidgetMatchResults = 0;

function initiateWidgetMatchResultsScript(widgetMatchResultsLocation, widgetKey) {
    if (isWidgetMatchResults == 0) {
        var script = document.createElement('script');
        script.src = 'jquery.widgetMatchResults.js';
        script.type = 'text/javascript';
        document.getElementsByTagName('head')[0].appendChild(script);

        var script = document.createElement('link');
        script.href = 'widgetMatchResults.css';
        script.rel = 'stylesheet';
        script.type = 'text/css';
        document.getElementsByTagName('head')[0].appendChild(script);

        isWidgetMatchResults = 1;

        setTimeout(function() {
            $(widgetMatchResultsLocation).unbind().removeData().html('').widgetMatchResults({
                'widgetKey': widgetKey,
                'matchId': (sessionStorage.getItem('matchDetailsKey') ? sessionStorage.getItem('matchDetailsKey') : ''),
                'method': 'Fixtures'
            });
        }, 1000);
    }
}

// Function for League css, js and widget activation
var isWidgetLeague = 0;

function initiateWidgetLeagueScript(widgetLeagueLocation, widgetKey) {
    if (isWidgetLeague == 0) {
        var script = document.createElement('script');
        script.src = 'jquery.widgetLeague.js';
        script.type = 'text/javascript';
        document.getElementsByTagName('head')[0].appendChild(script);

        var script = document.createElement('link');
        script.href = 'widgetLeague.css';
        script.rel = 'stylesheet';
        script.type = 'text/css';
        document.getElementsByTagName('head')[0].appendChild(script);

        isWidgetLeague = 1;
    }
}

function initiateWidgetLeague(widgetLeagueLocation, widgetKey, leagueId, leagueName, leagueLogo) {
    if (isWidgetLeague == 1) {
        $(widgetLeagueLocation).unbind().removeData().html('').widgetLeague({
            'widgetKey': widgetKey,
            'leagueId': leagueId,
            'leagueName': leagueName,
            'leagueLogo': leagueLogo
        });
    }
}

// Function that get server time
var timeForFixtures = '';

var fiTFF = setInterval(function() {

    if (typeof getTimeZone() != 'undefined') {
        $.ajax({
            url: 'https://apiv2.allsportsapi.com/football/',
            cache: false,
            data: {
                met: 'Date',
                widgetKey: widgetKey,
                timezone: getTimeZone()
            },
            dataType: 'json'
        }).done(function(res) {

            var formattedDate = new Date(res.result.datetime  + "T00:00");
            var d = formattedDate.getDate();
            var m = formattedDate.getMonth() + 1;
            var y = formattedDate.getFullYear();
            timeForFixtures = y + '-' + (m < 10 ? '0' + m : m) + '-' + (d < 10 ? '0' + d : d);

        }).fail(function(error) {

        });
        clearInterval(fiTFF);
    }
}, 10);

// Function that get local time
function getTimeZone() {
    var offset = new Date().getTimezoneOffset(),
        o = Math.abs(offset);
    return (offset < 0 ? "+" : "-") + ("00" + Math.floor(o / 60)).slice(-2) + ":" + ("00" + (o % 60)).slice(-2);
}

// Function for Live Score css, js and widget activation
var isWidgetLiveScore = 0;

function initiateWidgetLiveScoreScript(widgetLiveScoreLocation, widgetKey) {

    if (isWidgetLiveScore == 0) {
        var script = document.createElement('script');
        script.src = 'jquery.widgetLiveScore.js';
        script.type = 'text/javascript';
        script.setAttribute('id', 'widgetLiveScoreJS');
        document.getElementsByTagName('head')[0].appendChild(script);

        var script = document.createElement('link');
        script.href = 'widgetLiveScore.css';
        script.rel = 'stylesheet';
        script.type = 'text/css';
        script.setAttribute('id', 'widgetLiveScoreCSS');
        document.getElementsByTagName('head')[0].appendChild(script);

        isWidgetLiveScore = 1;

        var fi = setInterval(function() {
            if (($('#widgetLiveScoreJS').length > 0) && ($('#widgetLiveScoreCSS').length > 0)) {
                $(widgetLiveScoreLocation).unbind().removeData().html('').widgetLiveScore({
                    'widgetKey': widgetKey,
                    'method': 'Livescore',
                    'timezone': getTimeZone()
                });
                clearInterval(fi);
            }
        }, 10);
    }
}

// Function that get calendar days for dextop
function getDateCalendar(liveScoreCalendarContainer, currentDate, getDateCalendar, dayNb, addSubstractSign) {

    var ttCalendar = currentDate;

    var dateCalendar = new Date(ttCalendar + "T00:00");
    var newdateCalendar = new Date(dateCalendar);

    if (addSubstractSign == 'addDateCalendar') {
        newdateCalendar.setDate(newdateCalendar.getDate() + dayNb);
    } else if (addSubstractSign == 'substractDateCalendar') {
        newdateCalendar.setDate(newdateCalendar.getDate() - dayNb);
    }

    var ddCalendar = newdateCalendar.getDate();
    var mmCalendar = newdateCalendar.getMonth() + 1;
    var yCalendar = newdateCalendar.getFullYear();

    var finalDay = (ddCalendar < 10 ? '0' + ddCalendar : ddCalendar) + '.' + (mmCalendar < 10 ? '0' + mmCalendar : mmCalendar) + '.' + yCalendar;
    var finalDayClick = yCalendar + '-' + (mmCalendar < 10 ? '0' + mmCalendar : mmCalendar) + '-' + (ddCalendar < 10 ? '0' + ddCalendar : ddCalendar);

    return $('<a href="#" onclick="windowPreventOpening()" id="' + getDateCalendar + '" class="callendarDays thisDateForSelect" data-dateclicked="' + finalDayClick + '">' + finalDay + '</a>').prependTo($('#' + liveScoreCalendarContainer));
}

// Function that get calendar days for mobile
function getDateCalendarMobile(liveScoreCalendarContainer, currentDate, getDateCalendar, dayNb, addSubstractSign) {

    var ttCalendar = currentDate;

    var dateCalendar = new Date(ttCalendar + "T00:00");
    var newdateCalendar = new Date(dateCalendar);

    if (addSubstractSign == 'addDateCalendar') {
        newdateCalendar.setDate(newdateCalendar.getDate() + dayNb);
    } else if (addSubstractSign == 'substractDateCalendar') {
        newdateCalendar.setDate(newdateCalendar.getDate() - dayNb);
    }

    var ddCalendar = newdateCalendar.getDate();
    var mmCalendar = newdateCalendar.getMonth() + 1;
    var yCalendar = newdateCalendar.getFullYear();

    var finalDay = (ddCalendar < 10 ? '0' + ddCalendar : ddCalendar) + '.' + (mmCalendar < 10 ? '0' + mmCalendar : mmCalendar) + '.' + yCalendar;
    var finalDayClick = yCalendar + '-' + (mmCalendar < 10 ? '0' + mmCalendar : mmCalendar) + '-' + (ddCalendar < 10 ? '0' + ddCalendar : ddCalendar);

    return $('<option class="thisDateForSelect" value="' + finalDayClick + '" data-dateclicked="' + timeForFixtures + '">' + finalDay + '</option>').prependTo($('#' + liveScoreCalendarContainer));
}

function whatToPush(where, bookmaker, one, two) {
    return where.push({
        bookmaker: bookmaker,
        one: ((typeof one != 'undefined') ? one : '' ),
        two: ((typeof two != 'undefined') ? two : '' )
    });
}