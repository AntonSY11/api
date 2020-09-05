define({ "api": [
  {
    "type": "get",
    "url": "sport-types",
    "title": "List of sport-types",
    "group": "Sport_Types",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "SportType[]",
            "optional": false,
            "field": "Array",
            "description": "<p>of the &quot;SportType&quot; object</p>"
          }
        ],
        "SportType": [
          {
            "group": "SportType",
            "type": "Integer",
            "optional": false,
            "field": "id",
            "description": "<p>ID of the sport-type</p>"
          },
          {
            "group": "SportType",
            "type": "String",
            "optional": false,
            "field": "key",
            "description": "<p>Key of the sport-type</p>"
          },
          {
            "group": "SportType",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>Name of the sport-type</p>"
          },
          {
            "group": "SportType",
            "type": "String",
            "optional": false,
            "field": "image_url",
            "description": "<p>Url of the sport-type image</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/SportTypeController.php",
    "groupTitle": "Sport_Types",
    "name": "GetSportTypes",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "search",
            "description": "<p>Search param</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": true,
            "field": "filters",
            "description": "<p>Filters param</p>"
          },
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": true,
            "field": "page",
            "description": "<p>Page param</p>"
          },
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": true,
            "field": "limit",
            "description": "<p>Limit param</p>"
          }
        ]
      }
    }
  },
  {
    "type": "get",
    "url": "tournament-formats",
    "title": "List of tournament-formats",
    "group": "Tournament_Formats",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "TournamentFormat[]",
            "optional": false,
            "field": "Array",
            "description": "<p>of the &quot;TournamentFormat&quot; object</p>"
          }
        ],
        "TournamentFormat": [
          {
            "group": "TournamentFormat",
            "type": "Integer",
            "optional": false,
            "field": "id",
            "description": "<p>ID of the tournament-format</p>"
          },
          {
            "group": "TournamentFormat",
            "type": "String",
            "optional": false,
            "field": "key",
            "description": "<p>Key of the tournament-format</p>"
          },
          {
            "group": "TournamentFormat",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>Name of the tournament-format</p>"
          }
        ]
      }
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/TournamentFormatController.php",
    "groupTitle": "Tournament_Formats",
    "name": "GetTournamentFormats",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "search",
            "description": "<p>Search param</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": true,
            "field": "filters",
            "description": "<p>Filters param</p>"
          },
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": true,
            "field": "page",
            "description": "<p>Page param</p>"
          },
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": true,
            "field": "limit",
            "description": "<p>Limit param</p>"
          }
        ]
      }
    }
  }
] });
