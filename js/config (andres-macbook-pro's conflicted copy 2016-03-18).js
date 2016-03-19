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
            // q: 'Miami, US',
            zip: '33015, US',
            units: 'imperial',
            // if you want a different language just for your weather report change it here
            lang: 'en',
            APPID: '25c50f2502a04cbc9ada3062ea4b8420'
        }
    },
    compliments: {
        interval: 30000,
        fadeInterval: 4000,
        morning: [
            'Today is your day, sieze it',
            'Enjoy your day!',
            'Think positive, its a new day',
            'How can you make this the best day possible?',
            'Just Do It!'
        ],
        afternoon: [
            'Hello, beauty!',
            'You look sexy!',
            'Looking good today!'
        ],
        evening: [
            'What a nice evening',
            'Hug someone you love',
            'Smile, youll be resting soon',
            'Hi, sexy!'
        ]
    },
    calendar: {
        maximumEntries: 10, // Total Maximum Entries
		displaySymbol: true,
		defaultSymbol: 'calendar', // Fontawsome Symbol see http://fontawesome.io/cheatsheet/
        urls: [
		{
			symbol: 'calendar',
			url: 'https://calendar.google.com/calendar/ical/andrecastillo%40gmail.com/private-8fef094677345d75f5fdcd4fe72fa072/basic.ics',
		}
		// {
		    // symbol: 'soccer-ball-o',
            // url: 'http://www.nba.com/teams/schedules/2015/heat_schedule.ics'
		// },
		// {
			// symbol: 'mars',
			// url: "webcal://mlb.am/tix/marlins_schedule_full",
		// },
		// {
			// symbol: 'venus',
			// url: "https://server/url/to/hers.ics",
		// },
		// {
			// symbol: 'venus-mars',
			// url: "https://server/url/to/theirs.ics",
		// },
		]
    },
    news: {
        feed: 'http://www.nytimes.com/services/xml/rss/nyt/HomePage.xml'
    }
}
