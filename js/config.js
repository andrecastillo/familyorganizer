var config = {
    // controls the language for all settings unless you change below where indicated
    lang: 'en',
    time: {
        timeFormat: 12,
        displaySeconds: true,
        digitFade: false,
    },
    weather: {
        //change weather params here:
        //units: metric or imperial
        params: {
            // put your zip here, i've moved mine into a different file for security
            // zip: '12345, US',
            units: 'imperial',
            // if you want a different language just for your weather report change it here
            lang: 'en'
            // Put your ID here, I've moved mine into a different file for security
            // APPID: 'abcdefghijklmnopqrstuvwxyz'
        }
    },
    compliments: {
        interval: 30000,
        fadeInterval: 4000
        // I've got more in my config file because I don't want you knowing what I tell myself
        /*
        morning: [
            'Just Do It!'
        ],
        afternoon: [
            'Just Do It!'
        ],
        evening: [
            'Just Do It!'
        ]
        */
    },
    calendar: {
        maximumEntries: 10, // Total Maximum Entries
        // Fontawsome Symbol see http://fontawesome.io/cheatsheet/
		displaySymbol: true,
		defaultSymbol: 'calendar'
        // moved to secrets.js because i use my private calendar address, just uncomment, and only put an ics for
        // the number of calendars you want, if you only want, one, then only have one element in the array
        /*
        urls: [
		{
			symbol: 'calendar-plus-o',
            url: "https://server/url/to/his.ics",
		},
		{
	        symbol: 'soccer-ball-o',
		    url: '',
		},
		{
			symbol: 'mars',
			url: "https://server/url/to/his.ics",
		},
		{
			symbol: 'venus',
			url: "https://server/url/to/hers.ics",
		},
		{
		    symbol: 'venus-mars',
			url: "https://server/url/to/theirs.ics",
		}
		]
		*/
    },
    news: {
        feed: 'http://www.nytimes.com/services/xml/rss/nyt/HomePage.xml'
    }
}
