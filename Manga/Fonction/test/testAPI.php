<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <input type="search" name="" id="search"></input>
        <ul id="results">
        </ul>
    </body>
 
    <style>
        #results {
            display     : flex;
            flex-wrap   : wrap;
            margin      : 10px;
        }
        #results img {
            margin: 10px;
            flex: 1 1 150px;
            list-style: none;
        }
    </style>
    <!--
    <script>
    document.getElementById( "search" ).addEventListener( "keyup", async ( e ) => {
            fetch("https://awqo5j657s-dsn.algolia.net/1/indexes/production_media/query?x-algolia-agent=Algolia%20for%20vanilla%20JavaScript%20(lite)%203.24.12&x-algolia-application-id=AWQO5J657S&x-algolia-api-key=NzYxODA5NmY0ODRjYTRmMzQ2YjMzNzNmZmFhNjY5ZGRmYjZlMzViN2VkZDIzMGUwYjM5ZjQ5NjAwZGI4ZTc5MHJlc3RyaWN0SW5kaWNlcz1wcm9kdWN0aW9uX21lZGlhJmZpbHRlcnM9Tk9UK2FnZVJhdGluZyUzQVIxOA%3D%3D", {
                "credentials": "omit",
                "headers": {
                    "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0",
                    "Accept": "application/json",
                    "Accept-Language": "fr,fr-FR;q=0.8,en-US;q=0.5,en;q=0.3",
                    "content-type": "application/x-www-form-urlencoded",
                    "Sec-Fetch-Dest": "empty",
                    "Sec-Fetch-Mode": "cors",
                    "Sec-Fetch-Site": "cross-site",
                    "Pragma": "no-cache",
                    "Cache-Control": "no-cache"
                },
                "referrer": "https://kitsu.io/",
                "body": `{\"params\":\"query=${ e.target.value }&attributesToRetrieve=%5B%22id%22%2C%22slug%22%2C%22volumeCount%22%2C%22canonicalTitle%22%2C%22titles%22%2C%22posterImage%22%2C%22subtype%22%2C%22posterImage%22%5D&hitsPerPage=4&queryLanguages=%5B%22en%22%2C%22ja%22%5D&naturalLanguages=%5B%22en%22%2C%22ja%22%5D&attributesToHighlight=%5B%5D&responseFields=%5B%22hits%22%2C%22hitsPerPage%22%2C%22nbHits%22%2C%22nbPages%22%2C%22offset%22%2C%22page%22%5D&removeStopWords=false&removeWordsIfNoResults=allOptional\"}`,
                "method": "POST",
                "mode": "cors"
            }).then( x => x.json( ) ).then( ( x ) => console.log( x ) );
    } ); -->

    
    <script>
        document.getElementById( "search" ).addEventListener( "keyup", async ( e ) => {
            const test = await fetch( "https://graphql.anilist.co", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    query: `
                        query ($page: Int = 1, $id: Int, $type: MediaType, $isAdult: Boolean = false, $search: String, $format: [MediaFormat], $status: MediaStatus, $countryOfOrigin: CountryCode, $source: MediaSource, $season: MediaSeason, $seasonYear: Int, $year: String, $onList: Boolean, $yearLesser: FuzzyDateInt, $yearGreater: FuzzyDateInt, $episodeLesser: Int, $episodeGreater: Int, $durationLesser: Int, $durationGreater: Int, $chapterLesser: Int, $chapterGreater: Int, $volumeLesser: Int, $volumeGreater: Int, $licensedBy: [Int], $isLicensed: Boolean, $genres: [String], $excludedGenres: [String], $tags: [String], $excludedTags: [String], $minimumTagRank: Int, $sort: [MediaSort] = [POPULARITY_DESC, SCORE_DESC]) {
                            Page(page: $page, perPage: 10000) {
                                pageInfo { total perPage currentPage lastPage hasNextPage }
                                media( id: $id, type: $type, season: $season, format_in: $format, status: $status, countryOfOrigin: $countryOfOrigin, source: $source, search: $search, onList: $onList, seasonYear: $seasonYear, startDate_like: $year, startDate_lesser: $yearLesser, startDate_greater: $yearGreater, episodes_lesser: $episodeLesser, episodes_greater: $episodeGreater, duration_lesser: $durationLesser, duration_greater: $durationGreater, chapters_lesser: $chapterLesser, chapters_greater: $chapterGreater, volumes_lesser: $volumeLesser, volumes_greater: $volumeGreater, licensedById_in: $licensedBy, isLicensed: $isLicensed, genre_in: $genres, genre_not_in: $excludedGenres, tag_in: $tags, tag_not_in: $excludedTags, minimumTagRank: $minimumTagRank, sort: $sort, isAdult: $isAdult ) {
                                id
                                title { userPreferred }
                                coverImage { medium }
                            }
                        }
                    }`,
                    variables: {
                    "page":	1,
                        "search": e.target.value,
                        "sort"  : "SEARCH_MATCH",
                        "type"  : "MANGA"
                    },
                }),
                })
                .then( ( res ) => res.json() )
                results.innerHTML = "";
                test.data.Page.media.forEach( ( media ) => {
                    results.innerHTML += `
                        <li>
                            <img width="100px" src="${ media.coverImage.medium }">
                            <p>${ media.title.userPreferred }</p>
                        </li>`
                });
            }); 
    </script>
    
</html>