define({ "api": [
  {
    "group": "Appointment",
    "name": "createAppointment",
    "type": "POST",
    "url": "/v1/appointments",
    "title": "Créer un rdv",
    "description": "<p>Créer un rdv</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "users_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "doctor_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "date",
            "optional": false,
            "field": "date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "time",
            "optional": false,
            "field": "time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "motif",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Appointment/UI/API/Routes/CreateAppointment.v1.public.php",
    "groupTitle": "Appointment"
  },
  {
    "group": "Appointment",
    "name": "deleteAppointment",
    "type": "DELETE",
    "url": "/v1/appointments/:id",
    "title": "Supprimer un rdv",
    "description": "<p>Supprimer un rdv</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Appointment/UI/API/Routes/DeleteAppointment.v1.public.php",
    "groupTitle": "Appointment"
  },
  {
    "group": "Appointment",
    "name": "findAppointmentById",
    "type": "GET",
    "url": "/v1/appointments/:id",
    "title": "Récupere un rdv",
    "description": "<p>Récupere un rdv</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Appointment/UI/API/Routes/FindAppointmentById.v1.public.php",
    "groupTitle": "Appointment"
  },
  {
    "group": "Appointment",
    "name": "getAllAppointments",
    "type": "GET",
    "url": "/v1/appointments",
    "title": "Recuperer tous les rdv",
    "description": "<p>Recuperer tous les rdv</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Appointment/UI/API/Routes/GetAllAppointments.v1.public.php",
    "groupTitle": "Appointment"
  },
  {
    "group": "Appointment",
    "name": "updateAppointment",
    "type": "PATCH",
    "url": "/v1/appointments/:id",
    "title": "Modifier un rdv",
    "description": "<p>Modifier un rdv</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "users_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "doctor_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "date",
            "optional": false,
            "field": "date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "time",
            "optional": false,
            "field": "time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "motif",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Appointment/UI/API/Routes/UpdateAppointment.v1.public.php",
    "groupTitle": "Appointment"
  },
  {
    "group": "Availability",
    "name": "createAvailability",
    "type": "POST",
    "url": "/v1/availabilities",
    "title": "Créer une disponibilité",
    "description": "<p>Créer une disponibilité</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "date",
            "optional": false,
            "field": "date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "time",
            "optional": false,
            "field": "start_time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "time",
            "optional": false,
            "field": "end_time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "description",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "users_id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Availability/UI/API/Routes/CreateAvailability.v1.public.php",
    "groupTitle": "Availability"
  },
  {
    "group": "Availability",
    "name": "deleteAvailability",
    "type": "DELETE",
    "url": "/v1/availabilities/:id",
    "title": "Supprime une disponibilité",
    "description": "<p>Supprime une disponibilité</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Availability/UI/API/Routes/DeleteAvailability.v1.public.php",
    "groupTitle": "Availability"
  },
  {
    "group": "Availability",
    "name": "findAvailabilityById",
    "type": "GET",
    "url": "/v1/availabilities/:id",
    "title": "Récupere une disponibilité",
    "description": "<p>Récupere une disponibilité</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Availability/UI/API/Routes/FindAvailabilityById.v1.public.php",
    "groupTitle": "Availability"
  },
  {
    "group": "Availability",
    "name": "getAllAvailabilities",
    "type": "GET",
    "url": "/v1/availabilities",
    "title": "Retourne toutes les disponibilités",
    "description": "<p>Retourne toutes les disponibilités</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Availability/UI/API/Routes/GetAllAvailabilities.v1.public.php",
    "groupTitle": "Availability"
  },
  {
    "group": "Availability",
    "name": "updateAvailability",
    "type": "PATCH",
    "url": "/v1/availabilities/:id",
    "title": "Mettre à jour une disponibilité",
    "description": "<p>Mettre à jour une disponibilité</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "date",
            "optional": false,
            "field": "date",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "time",
            "optional": false,
            "field": "start_time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "time",
            "optional": false,
            "field": "end_time",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "description",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "users_id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Availability/UI/API/Routes/UpdateAvailability.v1.public.php",
    "groupTitle": "Availability"
  },
  {
    "group": "Call",
    "name": "createCall",
    "type": "POST",
    "url": "/v1/calls",
    "title": "Permet de créer un appel",
    "description": "<p>Permet de créer un appel</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "user_from_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "user_to_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "rdv_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "duration",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "has_missed",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Call/UI/API/Routes/CreateCall.v1.public.php",
    "groupTitle": "Call"
  },
  {
    "group": "Call",
    "name": "deleteCall",
    "type": "DELETE",
    "url": "/v1/calls/:id",
    "title": "Permet de supprimer un appel",
    "description": "<p>Permet de supprimer un appel</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Call/UI/API/Routes/DeleteCall.v1.public.php",
    "groupTitle": "Call"
  },
  {
    "group": "Call",
    "name": "findCallById",
    "type": "GET",
    "url": "/v1/calls/:id",
    "title": "Permet de récuperer un appel",
    "description": "<p>Permet de récuperer un appel</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Call/UI/API/Routes/FindCallById.v1.public.php",
    "groupTitle": "Call"
  },
  {
    "group": "Call",
    "name": "getAllCalls",
    "type": "GET",
    "url": "/v1/calls",
    "title": "Permet de récuperer tous les appels",
    "description": "<p>Permet de récuperer tous les appels</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Call/UI/API/Routes/GetAllCalls.v1.public.php",
    "groupTitle": "Call"
  },
  {
    "group": "Call",
    "name": "updateCall",
    "type": "PATCH",
    "url": "/v1/calls/:id",
    "title": "Permet de modifier un appel",
    "description": "<p>Permet de modifier un appel</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Call/UI/API/Routes/UpdateCall.v1.public.php",
    "groupTitle": "Call"
  },
  {
    "group": "CenterOffers",
    "name": "createCenterOffers",
    "type": "POST",
    "url": "/v1/centeroffers",
    "title": "Permet de créer une offre pour un centre",
    "description": "<p>Permet de créer une offre pour un centre</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "title",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "description",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "image",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "center_id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/CenterOffers/UI/API/Routes/CreateCenterOffers.v1.public.php",
    "groupTitle": "CenterOffers"
  },
  {
    "group": "CenterOffers",
    "name": "deleteCenterOffers",
    "type": "DELETE",
    "url": "/v1/centeroffers/:id",
    "title": "Permet de supprimer une offre pour un centre",
    "description": "<p>Permet de supprimer une offre pour un centre</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/CenterOffers/UI/API/Routes/DeleteCenterOffers.v1.public.php",
    "groupTitle": "CenterOffers"
  },
  {
    "group": "CenterOffers",
    "name": "findCenterOffersById",
    "type": "GET",
    "url": "/v1/centeroffers/:id",
    "title": "Permet de récuperer une offre",
    "description": "<p>Permet de récuperer une offre</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/CenterOffers/UI/API/Routes/FindCenterOffersById.v1.public.php",
    "groupTitle": "CenterOffers"
  },
  {
    "group": "CenterOffers",
    "name": "getAllCenterOffers",
    "type": "GET",
    "url": "/v1/centeroffers",
    "title": "Permet de récuperer toutes les offres",
    "description": "<p>Permet de récuperer toutes les offres</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/CenterOffers/UI/API/Routes/GetAllCenterOffers.v1.public.php",
    "groupTitle": "CenterOffers"
  },
  {
    "group": "CenterOffers",
    "name": "updateCenterOffers",
    "type": "PATCH",
    "url": "/v1/centeroffers/:id",
    "title": "Permet de modifier une offre pour un centre",
    "description": "<p>Permet de modifier une offre pour un centre</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/CenterOffers/UI/API/Routes/UpdateCenterOffers.v1.public.php",
    "groupTitle": "CenterOffers"
  },
  {
    "group": "CenterType",
    "name": "createCenterType",
    "type": "POST",
    "url": "/v1/centertypes",
    "title": "Permet de créer un type de centre",
    "description": "<p>Cet endpoint vous permet de créer un type de centre</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "description",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/CenterType/UI/API/Routes/CreateCenterType.v1.public.php",
    "groupTitle": "CenterType"
  },
  {
    "group": "CenterType",
    "name": "deleteCenterType",
    "type": "DELETE",
    "url": "/v1/centertypes/:id",
    "title": "Permet de supprimer un type de centre",
    "description": "<p>Permet de supprimer un type de centre</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/CenterType/UI/API/Routes/DeleteCenterType.v1.public.php",
    "groupTitle": "CenterType"
  },
  {
    "group": "CenterType",
    "name": "findCenterTypeById",
    "type": "GET",
    "url": "/v1/centertypes/:id",
    "title": "Permet de recupérer un type de centre avec son id",
    "description": "<p>Permet de recupérer un type de centre avec son id</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/CenterType/UI/API/Routes/FindCenterTypeById.v1.public.php",
    "groupTitle": "CenterType"
  },
  {
    "group": "CenterType",
    "name": "getAllCenterTypes",
    "type": "GET",
    "url": "/v1/centertypes",
    "title": "Permet de recupérer tous les types de centres",
    "description": "<p>Permet de recupérer tous les types de centres</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/CenterType/UI/API/Routes/GetAllCenterTypes.v1.public.php",
    "groupTitle": "CenterType"
  },
  {
    "group": "CenterType",
    "name": "updateCenterType",
    "type": "PATCH",
    "url": "/v1/centertypes/:id",
    "title": "Mise à jour d'un type de centre",
    "description": "<p>Mise à jour d'un type de centre</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "description",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/CenterType/UI/API/Routes/UpdateCenterType.v1.public.php",
    "groupTitle": "CenterType"
  },
  {
    "group": "Center",
    "name": "createCenter",
    "type": "POST",
    "url": "/v1/centers",
    "title": "Permet de créer un centre de santé",
    "description": "<p>Permet de créer un centre de santé</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "address",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "phone",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "lat",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "lng",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "center_type_id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Center/UI/API/Routes/CreateCenter.v1.public.php",
    "groupTitle": "Center"
  },
  {
    "group": "Center",
    "name": "deleteCenter",
    "type": "DELETE",
    "url": "/v1/centers/:id",
    "title": "Permet de supprimer un centre de santé",
    "description": "<p>Permet de supprimer un centre de santé</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Center/UI/API/Routes/DeleteCenter.v1.public.php",
    "groupTitle": "Center"
  },
  {
    "group": "Center",
    "name": "findCenterById",
    "type": "GET",
    "url": "/v1/centers/:id",
    "title": "Permet de récuperer un centre de santé",
    "description": "<p>Permet de récuperer un centre de santé</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Center/UI/API/Routes/FindCenterById.v1.public.php",
    "groupTitle": "Center"
  },
  {
    "group": "Center",
    "name": "getAllCenters",
    "type": "GET",
    "url": "/v1/centers",
    "title": "Permet de récuperer tous les centres de santés",
    "description": "<p>Permet de récuperer tous les centres de santés</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Center/UI/API/Routes/GetAllCenters.v1.public.php",
    "groupTitle": "Center"
  },
  {
    "group": "Center",
    "name": "updateCenter",
    "type": "PATCH",
    "url": "/v1/centers/:id",
    "title": "Permet de modifier un centre de santé",
    "description": "<p>Permet de modifier un centre de santé</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Center/UI/API/Routes/UpdateCenter.v1.public.php",
    "groupTitle": "Center"
  },
  {
    "group": "Localization",
    "name": "getAllLocalizations",
    "type": "GET",
    "url": "/v1/localizations",
    "title": "Get all localizations",
    "description": "<p>Return all available localizations that are &quot;configured&quot; in the application</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // TODO..\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Localization/UI/API/Routes/GetAllLocalizations.v1.private.php",
    "groupTitle": "Localization"
  },
  {
    "group": "OAuth2",
    "name": "ClientAdminWebAppLoginProxy",
    "type": "post",
    "url": "/v1/clients/web/admin/login",
    "title": "Login (Password Grant with proxy)",
    "description": "<p>Login Users using their email and password, without client_id and client_secret.</p>",
    "version": "1.0.0",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>user email</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>user password</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"token_type\": \"Bearer\",\n  \"expires_in\": 315360000,\n  \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\",\n  \"refresh_token\": \"ZFDPA1S7H8Wydjkjl+xt+hPGWTagX...\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/ProxyLoginForAdminWebClient.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "OAuth2",
    "name": "ClientAdminWebAppRefreshProxy",
    "type": "post",
    "url": "/v1/clients/web/admin/refresh",
    "title": "Refresh",
    "description": "<p>If <code>refresh_token</code> is not provided the w'll try to get it from the http cookie.</p>",
    "version": "1.0.0",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "refresh_token",
            "description": "<p>The refresh Token</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"token_type\": \"Bearer\",\n  \"expires_in\": 315360000,\n  \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\",\n  \"refresh_token\": \"ZFDPA1S7H8Wydjkjl+xt+hPGWTagX...\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/ProxyRefreshForAdminWebClient.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "OAuth2",
    "name": "LoginCredentialsGrant",
    "type": "post",
    "url": "/v1/oauth/token",
    "title": "Login (Client Credentials Grant)",
    "description": "<p>Login Users using their username and passwords. (For Third-Party Clients). You must have client ID and secret first. You can generate them by creating new Client in our Web App.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "client_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "client_secret",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "grant_type",
            "description": "<p>must be <code>client_credentials</code></p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "scope",
            "description": "<p>you can leave it empty</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"token_type\": \"Bearer\",\n  \"expires_in\": 315360000,\n  \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\",\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/LoginUsingCredentialGrant.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "OAuth2",
    "name": "LoginPasswordGrant",
    "type": "post",
    "url": "/v1/oauth/token",
    "title": "Login (Password Grant)",
    "description": "<p>Login Users using their username and passwords. (For First-Party Clients)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "username",
            "description": "<p>user email</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>user password</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "client_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "client_secret",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "grant_type",
            "description": "<p>must be <code>password</code></p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "scope",
            "description": "<p>you can leave it empty</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"token_type\": \"Bearer\",\n  \"expires_in\": 315360000,\n  \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\",\n  \"refresh_token\": \"Oukd61zgKzt8TBwRjnasd...\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/LoginUsingPasswordGrant.v1.private.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "OAuth2",
    "name": "Logout",
    "type": "DELETE",
    "url": "/v1/logout",
    "title": "Logout",
    "description": "<p>User Logout. (Revoking Access Token)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 Accepted\n{\n  \"message\": \"Token revoked successfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/Logout.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "Payment",
    "name": "deletePaymentAccount",
    "type": "DELETE",
    "url": "/v1/user/paymentaccounts/:id",
    "title": "Delete Payment Account",
    "description": "<p>Deletes a payment account. Also deletes the corresponding model with the account details (e.g., for stripe, ...)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    // TODO: Insert the response of the request here.\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Payment/UI/API/Routes/DeletePaymentAccount.v1.private.php",
    "groupTitle": "Payment"
  },
  {
    "group": "Payment",
    "name": "getPaymentAccount",
    "type": "GET",
    "url": "/v1/user/paymentaccounts/:id",
    "title": "Find Payment Account by ID",
    "description": "<p>Find Details for a specific payment account. Note that this outputs respective &quot;visible&quot; fields from the model of the Payment Provider (e.g., Paypal)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // TODO: Insert the response of the request here.\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Payment/UI/API/Routes/GetPaymentAccount.v1.private.php",
    "groupTitle": "Payment"
  },
  {
    "group": "Payment",
    "name": "getPaymentAccountDetails",
    "type": "GET",
    "url": "/v1/user/paymentaccounts/:id",
    "title": "Find Payment Account Details",
    "description": "<p>Find Details for a specific payment account. Note that this outputs respective &quot;visible&quot; fields from the model of the Payment Provider (e.g., Paypal)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Payment/UI/API/Routes/FindPaymentAccountDetails.v1.private.php",
    "groupTitle": "Payment"
  },
  {
    "group": "Payment",
    "name": "getPaymentAccounts",
    "type": "GET",
    "url": "/v1/user/paymentaccounts",
    "title": "Get All Payment Accounts",
    "description": "<p>Get All Payment Accounts for this user</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Payment/UI/API/Routes/GetAllPaymentAccounts.v1.private.php",
    "groupTitle": "Payment"
  },
  {
    "group": "Payment",
    "name": "updatePaymentAccount",
    "type": "PATCH",
    "url": "/v1/user/paymentaccounts/:id",
    "title": "Update Payment Account",
    "description": "<p>Updates a single Payment Account. Does NOT (!) update the account credentials from the respective payment gateway (e.g., Paypal).</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    // TODO: Insert the response of the request here.\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Payment/UI/API/Routes/UpdatePaymentAccount.v1.private.php",
    "groupTitle": "Payment"
  },
  {
    "group": "Prescription",
    "name": "createPrescription",
    "type": "POST",
    "url": "/v1/prescriptions",
    "title": "Endpoint title here..",
    "description": "<p>Endpoint description here..</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Prescription/UI/API/Routes/CreatePrescription.v1.public.php",
    "groupTitle": "Prescription"
  },
  {
    "group": "Prescription",
    "name": "deletePrescription",
    "type": "DELETE",
    "url": "/v1/prescriptions/:id",
    "title": "Endpoint title here..",
    "description": "<p>Endpoint description here..</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Prescription/UI/API/Routes/DeletePrescription.v1.public.php",
    "groupTitle": "Prescription"
  },
  {
    "group": "Prescription",
    "name": "findPrescriptionById",
    "type": "GET",
    "url": "/v1/prescriptions/:id",
    "title": "Endpoint title here..",
    "description": "<p>Endpoint description here..</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Prescription/UI/API/Routes/FindPrescriptionById.v1.public.php",
    "groupTitle": "Prescription"
  },
  {
    "group": "Prescription",
    "name": "getAllPrescriptions",
    "type": "GET",
    "url": "/v1/prescriptions",
    "title": "Endpoint title here..",
    "description": "<p>Endpoint description here..</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Prescription/UI/API/Routes/GetAllPrescriptions.v1.public.php",
    "groupTitle": "Prescription"
  },
  {
    "group": "Prescription",
    "name": "updatePrescription",
    "type": "PATCH",
    "url": "/v1/prescriptions/:id",
    "title": "Endpoint title here..",
    "description": "<p>Endpoint description here..</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Prescription/UI/API/Routes/UpdatePrescription.v1.public.php",
    "groupTitle": "Prescription"
  },
  {
    "group": "Prices",
    "name": "createPrices",
    "type": "POST",
    "url": "/v1/prices",
    "title": "Créer un tarif de consultation",
    "description": "<p>Créer un tarif de consultation</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "double",
            "optional": false,
            "field": "price_cabinet_consultation",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "double",
            "optional": false,
            "field": "price_teleconsultation",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "double",
            "optional": false,
            "field": "price_house_consultation",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "currency",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "centers_id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Prices/UI/API/Routes/CreatePrices.v1.public.php",
    "groupTitle": "Prices"
  },
  {
    "group": "Prices",
    "name": "deletePrices",
    "type": "DELETE",
    "url": "/v1/prices/:id",
    "title": "Supprimer un tarif de consultation",
    "description": "<p>Supprimer un tarif de consultation</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Prices/UI/API/Routes/DeletePrices.v1.public.php",
    "groupTitle": "Prices"
  },
  {
    "group": "Prices",
    "name": "findPricesById",
    "type": "GET",
    "url": "/v1/prices/:id",
    "title": "Recuperer un tarif de consultation",
    "description": "<p>Récuperer un tarif de consultation</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Prices/UI/API/Routes/FindPricesById.v1.public.php",
    "groupTitle": "Prices"
  },
  {
    "group": "Prices",
    "name": "getAllPrices",
    "type": "GET",
    "url": "/v1/prices",
    "title": "Récuperer tous les tarifs de consultation",
    "description": "<p>Récuperer tous les tarifs de consultation</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Prices/UI/API/Routes/GetAllPrices.v1.public.php",
    "groupTitle": "Prices"
  },
  {
    "group": "Prices",
    "name": "updatePrices",
    "type": "PATCH",
    "url": "/v1/prices/:id",
    "title": "Mettre à jour un tarif de consultation",
    "description": "<p>Mettre à jour un tarif de consultation</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Prices/UI/API/Routes/UpdatePrices.v1.public.php",
    "groupTitle": "Prices"
  },
  {
    "group": "RolePermission",
    "name": "assignUserToRole",
    "type": "post",
    "url": "/v1/roles/assign",
    "title": "Assign User to Roles",
    "description": "<p>Assign new roles to user. This endpoint does not sync the user with the new roles. It simply assign new role to the user. So make sure to never send an already assigned role since it will cause an error. To sync (update) all existing roles with the new ones use <code>/roles/sync</code> endpoint instead.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": "<p>User ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "roles_ids",
            "description": "<p>Role ID or Array of Roles ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/AssignUserToRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "attachPermissionToRole",
    "type": "post",
    "url": "/v1/permissions/attach",
    "title": "Attach Permissions to Role",
    "description": "<p>Attach new permissions to role. This endpoint does not sync the role with the new permissions. It simply attach new permission to the role. So make sure to never send an already attached permission since it will cause an error. To sync (update) all existing permissions with the new ones use <code>/permissions/sync</code> endpoint instead.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "role_id",
            "description": "<p>Role ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "permissions_ids",
            "description": "<p>Permission ID or Array of Permissions ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/AttachPermissionToRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "createRole",
    "type": "post",
    "url": "/v1/roles",
    "title": "Create a Role",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>Unique Role Name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "description",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "display_name",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/CreateRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "deleteRole",
    "type": "delete",
    "url": "/v1/roles/:id",
    "title": "Delete a Role",
    "description": "<p>Delete Role by ID</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated Role"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n    \"message\": \"Role (manager) Deleted Successfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/DeleteRole.v1.private.php",
    "groupTitle": "RolePermission"
  },
  {
    "group": "RolePermission",
    "name": "detachPermissionFromRole",
    "type": "post",
    "url": "/v1/permissions/detach",
    "title": "Detach Permissions from Role",
    "description": "<p>Detach existing permission from role. This endpoint does not sync the role It just detach the passed permissions from the role. So make sure to never send an non attached permission since it will cause an error. To sync (update) all existing permissions with the new ones use <code>/permissions/sync</code> endpoint instead.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "role_id",
            "description": "<p>Role ID</p>"
          },
          {
            "group": "Parameter",
            "type": "String-Array",
            "optional": false,
            "field": "permissions_ids",
            "description": "<p>Permission ID or Array of Permissions ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/DetachPermissionsFromRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "getAllPermissions",
    "type": "get",
    "url": "/v1/permissions",
    "title": "Get All Permission",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/GetAllPermissions.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "getAllRoles",
    "type": "get",
    "url": "/v1/roles",
    "title": "Get All Roles",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/GetAllRoles.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "getPermission",
    "type": "get",
    "url": "/v1/permissions/:id",
    "title": "Find a Permission by ID",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/FindPermission.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Permission\",\n      \"id\":\"n9kq6345javb05je\",\n      \"name\":\"amet-ducimus\",\n      \"description\":null,\n      \"display_name\":null\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "getRole",
    "type": "get",
    "url": "/v1/roles/:id",
    "title": "Find a Role by ID",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/FindRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "revokeRoleFromUser",
    "type": "post",
    "url": "/v1/roles/revoke",
    "title": "Revoke/Remove Roles from User",
    "description": "<p>Revoke existing roles from user. This endpoint does not sync the user It just revoke the passed role from the user. So make sure to never send a non assigned role since it will cause an error. To sync (update) all existing roles with the new ones use <code>/roles/sync</code> endpoint instead.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": "<p>user ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "roles_ids",
            "description": "<p>Role ID or Array of Role ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/RevokeUserFromRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "syncPermissionOnRole",
    "type": "post",
    "url": "/v1/permissions/sync",
    "title": "Sync Permissions on Role",
    "description": "<p>You can use this endpoint instead of <code>permissions/attach</code> &amp; <code>permissions/detach</code>. The sync endpoint will override all existing role permissions with the new one sent to this endpoint.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "role_id",
            "description": "<p>Role ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "permissions_ids",
            "description": "<p>Permission ID or Array of Permissions ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/SyncPermissionOnRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "syncUserRoles",
    "type": "post",
    "url": "/v1/roles/sync",
    "title": "Sync User Roles",
    "description": "<p>You can use this endpoint instead of <code>roles/assign</code> &amp; <code>roles/revoke</code>. The sync endpoint will override all existing user roles with the new one sent to this endpoint.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": "<p>User ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "roles_ids",
            "description": "<p>Role ID or Array of Roles ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/SyncUserRoles.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Settings",
    "name": "createSetting",
    "type": "POST",
    "url": "/v1/settings",
    "title": "Create Setting",
    "description": "<p>Create a new setting for the application</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n        \"object\": \"Setting\",\n        \"id\": \"aadfa72342sa\",\n        \"key\": \"hello\",\n        \"value\": \"world\"\n    },\n    \"meta\": {\n        \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Settings/UI/API/Routes/CreateSetting.v1.private.php",
    "groupTitle": "Settings"
  },
  {
    "group": "Settings",
    "name": "deleteSetting",
    "type": "DELETE",
    "url": "/v1/settings/:id",
    "title": "Delete Setting",
    "description": "<p>Deletes a setting entry</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 204 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Settings/UI/API/Routes/DeleteSetting.v1.private.php",
    "groupTitle": "Settings"
  },
  {
    "group": "Settings",
    "name": "getAllSettings",
    "type": "GET",
    "url": "/v1/settings",
    "title": "Get All Settings",
    "description": "<p>Get All settings for the application</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Setting\",\n            \"id\": \"damq35egme74k0xv\",\n            \"key\": \"foo\",\n            \"value\": \"bar\"\n        },\n        {\n            \"object\": \"Setting\",\n            \"id\": \"damq35egme74k0xv\",\n            \"key\": \"test\",\n            \"value\": \"456\"\n        },\n        {\n            \"object\": \"Setting\",\n            \"id\": \"damq35egme74k0xv\",\n            \"key\": \"logout\",\n            \"value\": \"false\"\n        }\n    ],\n    \"meta\": {\n\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Settings/UI/API/Routes/GetAllSettings.v1.private.php",
    "groupTitle": "Settings"
  },
  {
    "group": "Settings",
    "name": "updateSetting",
    "type": "PATCH",
    "url": "/v1/settings/:id",
    "title": "Update Setting",
    "description": "<p>Updates a setting entry (both key / value)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n        \"object\": \"Setting\",\n        \"id\": \"aadfa72342sa\",\n        \"key\": \"foo\",\n        \"value\": \"bar\"\n    },\n    \"meta\": {\n        \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Settings/UI/API/Routes/UpdateSetting.v1.private.php",
    "groupTitle": "Settings"
  },
  {
    "group": "SocialAuth",
    "name": "socialAuthFb",
    "type": "post",
    "url": "/v1/auth/facebook",
    "title": "",
    "description": "<p>After getting the User Token from facebook, call this Endpoint passing the user token to it in order to fetch his data and create the user in our database if not exist or return the existing one. For testing purposes use this endpoint <code>auth/facebook</code> to get the token.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "optional": false,
            "field": "oauth_token",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n        \"object\": \"User\",\n        \"id\": \"eqwja3vw94kzmxr1\",\n        \"name\": \"Mahmoud Zalt\",\n        \"email\": null,\n        \"confirmed\": false,\n        \"nickname\": null,\n        \"gender\": null,\n        \"birth\": null,\n        \"social_auth_provider\": \"facebook\",\n        \"social_id\": \"42719726\",\n        \"social_avatar\": {\n            \"avatar\": null,\n            \"original\": null\n        },\n        \"created_at\": {\n            \"date\": \"2017-10-20 21:45:03.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"updated_at\": {\n            \"date\": \"2017-10-20 21:45:03.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"readable_created_at\": \"48 minutes ago\",\n        \"readable_updated_at\": \"48 minutes ago\"\n    },\n    \"meta\": {\n        \"include\": [\n            \"roles\"\n        ],\n        \"custom\": {\n            \"token_type\": \"personal\",\n            \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUxI...\"\n        }\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/SocialAuth/UI/API/Routes/AuthenticateAll.v1.private.php",
    "groupTitle": "SocialAuth"
  },
  {
    "group": "SocialAuth",
    "name": "socialAuthTw",
    "type": "post",
    "url": "/v1/auth/twitter",
    "title": "",
    "description": "<p>After getting the User Token from twitter, call this Endpoint passing the user token to it in order to fetch his data and create the user in our database if not exist or return the existing one. For testing purposes use this endpoint <code>auth/twitter/</code> to get the token.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "optional": false,
            "field": "oauth_token",
            "description": ""
          },
          {
            "group": "Parameter",
            "optional": false,
            "field": "oauth_secret",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n        \"object\": \"User\",\n        \"id\": \"eqwja3vw94kzmxr0\",\n        \"name\": \"Mahmoud Zalt\",\n        \"email\": null,\n        \"confirmed\": false,\n        \"nickname\": null,\n        \"gender\": null,\n        \"birth\": null,\n        \"social_auth_provider\": \"twitter\",\n        \"social_id\": \"42719726\",\n        \"social_avatar\": {\n            \"avatar\": \"http://pbs.twimg.com/profile_images/1111111111/PENrcePC_normal.jpg\",\n            \"original\": null\n        },\n        \"created_at\": {\n            \"date\": \"2017-10-20 21:45:03.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"updated_at\": {\n            \"date\": \"2017-10-20 21:45:03.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"readable_created_at\": \"48 minutes ago\",\n        \"readable_updated_at\": \"48 minutes ago\"\n    },\n    \"meta\": {\n        \"include\": [\n            \"roles\"\n        ],\n        \"custom\": {\n            \"token_type\": \"personal\",\n            \"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI...\"\n        }\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/SocialAuth/UI/API/Routes/AuthenticateAll.v1.private.php",
    "groupTitle": "SocialAuth"
  },
  {
    "group": "Speciality",
    "name": "createSpeciality",
    "type": "POST",
    "url": "/v1/specialities",
    "title": "Permet de créer une spécialitée médicale",
    "description": "<p>Permet de créer une spécialitée médicale</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "description",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Speciality/UI/API/Routes/CreateSpeciality.v1.public.php",
    "groupTitle": "Speciality"
  },
  {
    "group": "Speciality",
    "name": "deleteSpeciality",
    "type": "DELETE",
    "url": "/v1/specialities/:id",
    "title": "Permet de supprimer une spécialitée médicale",
    "description": "<p>Permet de supprimer une spécialitée médicale</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Speciality/UI/API/Routes/DeleteSpeciality.v1.public.php",
    "groupTitle": "Speciality"
  },
  {
    "group": "Speciality",
    "name": "findSpecialityById",
    "type": "GET",
    "url": "/v1/specialities/:id",
    "title": "Permet de récuperer une spécialitée médicale",
    "description": "<p>Permet de récuperer une spécialitée médicale</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Speciality/UI/API/Routes/FindSpecialityById.v1.public.php",
    "groupTitle": "Speciality"
  },
  {
    "group": "Speciality",
    "name": "getAllSpecialities",
    "type": "GET",
    "url": "/v1/specialities",
    "title": "Permet de récuperer toutes les spécialitées médicale",
    "description": "<p>Permet de récuperer toutes les spécialitées médicale</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Speciality/UI/API/Routes/GetAllSpecialities.v1.public.php",
    "groupTitle": "Speciality"
  },
  {
    "group": "Speciality",
    "name": "updateSpeciality",
    "type": "PATCH",
    "url": "/v1/specialities/:id",
    "title": "Permet de modifier une spécialitée médicale",
    "description": "<p>Permet de modifier une spécialitée médicale</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Speciality/UI/API/Routes/UpdateSpeciality.v1.public.php",
    "groupTitle": "Speciality"
  },
  {
    "group": "Stripe",
    "name": "createStripeAccount",
    "type": "post",
    "url": "/v1/user/payments/accounts/stripe",
    "title": "Create Stripe Account",
    "description": "<p>Before calling this endpoint make sure to call Stripe first and get the <code>customer_id</code>. You may use &quot;Stripe Checkout&quot; or &quot;Stripe.js&quot; to make your Stripe call. This Information will be used to charge the user whenever he to purchase anything on the platform.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "customer_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "card_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "card_funding",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "card_last_digits",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "card_fingerprint",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nickname",
            "description": "<p>payment nickname for your usage</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n   \"message\":\"Stripe account created successfully.\",\n   \"stripe_account_id\":1\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Stripe/UI/API/Routes/CreateStripeAccount.v1.private.php",
    "groupTitle": "Stripe"
  },
  {
    "group": "Stripe",
    "name": "updateStripeAccount",
    "type": "PATCH",
    "url": "/v1/user/payments/accounts/stripe/:id",
    "title": "Update Stripe Account",
    "description": "<p>Update a stripe account.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Stripe/UI/API/Routes/UpdateStripeAccount.v1.private.php",
    "groupTitle": "Stripe"
  },
  {
    "group": "UserMeta",
    "name": "createUserMeta",
    "type": "POST",
    "url": "/v1/usermetas",
    "title": "Créer un complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)",
    "description": "<p>Créer un complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "users_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "start_year",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "end_year",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "title",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "description",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "at",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/UserMeta/UI/API/Routes/CreateUserMeta.v1.public.php",
    "groupTitle": "UserMeta"
  },
  {
    "group": "UserMeta",
    "name": "deleteUserMeta",
    "type": "DELETE",
    "url": "/v1/usermetas/:id",
    "title": "Supprimer un complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)",
    "description": "<p>Supprimer un complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/UserMeta/UI/API/Routes/DeleteUserMeta.v1.public.php",
    "groupTitle": "UserMeta"
  },
  {
    "group": "UserMeta",
    "name": "findUserMetaById",
    "type": "GET",
    "url": "/v1/usermetas/:id",
    "title": "Récuperer un complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)",
    "description": "<p>Récuperer un complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/UserMeta/UI/API/Routes/FindUserMetaById.v1.public.php",
    "groupTitle": "UserMeta"
  },
  {
    "group": "UserMeta",
    "name": "getAllUserMetas",
    "type": "GET",
    "url": "/v1/usermetas",
    "title": "Récuperer tous les complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)",
    "description": "<p>Récuperer tous les complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/UserMeta/UI/API/Routes/GetAllUserMetas.v1.public.php",
    "groupTitle": "UserMeta"
  },
  {
    "group": "UserMeta",
    "name": "updateUserMeta",
    "type": "PATCH",
    "url": "/v1/usermetas/:id",
    "title": "Modifier un complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)",
    "description": "<p>Modifier un complément d'informations pour un utilisateurs (spécialités, diplomes, certifications, experiences)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "users_id",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "start_year",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "end_year",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "title",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "description",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "at",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/UserMeta/UI/API/Routes/UpdateUserMeta.v1.public.php",
    "groupTitle": "UserMeta"
  },
  {
    "group": "User",
    "name": "forgotPassword",
    "type": "POST",
    "url": "/v1/password/forgot",
    "title": "Forgot password",
    "description": "<p>Forgot password endpoint.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "reseturl",
            "description": "<p>the reset password url</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/ForgotPassword.v1.public.php",
    "groupTitle": "User"
  },
  {
    "group": "User",
    "name": "resetPassword",
    "type": "GET/POST",
    "url": "/v1/password/reset",
    "title": "Reset Password",
    "description": "<p>Resets a password for an user.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "token",
            "description": "<p>from the forgot password email</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>the new password</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 204 OK\n{}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/ResetPassword.v1.public.php",
    "groupTitle": "User"
  },
  {
    "group": "Users",
    "name": "createAdmin",
    "type": "post",
    "url": "/v1/admins",
    "title": "Create Admin type Users",
    "description": "<p>Create non client users for the Dashboard.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "first_name",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "lasst_name",
            "description": "<p>(optional)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/User/UI/API/Routes/CreateAdmin.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "deleteUser",
    "type": "delete",
    "url": "/v1/users/:id",
    "title": "Delete User",
    "description": "<p>Delete users of any type (Admin, Client...)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n    \"message\": \"User (4) Deleted Successfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/DeleteUser.v1.private.php",
    "groupTitle": "Users"
  },
  {
    "group": "Users",
    "name": "findUserById",
    "type": "get",
    "url": "/v1/users/:id",
    "title": "Find User",
    "description": "<p>Find a user by its ID</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/FindUserById.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "getAllAdmins",
    "type": "get",
    "url": "/v1/admins",
    "title": "Get All Admin Users",
    "description": "<p>Get All Users where role <code>Admin</code>. You can search for Users by email, name and ID. Example: <code>?search=Mahmoud</code> or <code>?search=whatever@mail.com</code>. You can specify the field as follow <code>?search=email:whatever@mail.com</code> or <code>?search=id:20</code>. You can search by multiple fields as follow: <code>?search=name:Mahmoud&amp;email:whatever@mail.com</code>.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated Admin"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetAllAdmins.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "getAllClients",
    "type": "get",
    "url": "/v1/clients",
    "title": "Get All Client Users",
    "description": "<p>Get All Users where role <code>Client</code>. You can search for Users by email, name and ID. Example: <code>?search=Mahmoud</code> or <code>?search=whatever@mail.com</code>. You can specify the field as follow <code>?search=email:whatever@mail.com</code> or <code>?search=id:20</code>. You can search by multiple fields as follow: <code>?search=name:Mahmoud&amp;email:whatever@mail.com</code>.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetAllClients.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "getAllUsers",
    "type": "get",
    "url": "/v1/users",
    "title": "Get All Users",
    "description": "<p>Get All Application Users (clients and admins). For all registered users &quot;Clients&quot; only you can use <code>/clients</code>. And for all &quot;Admins&quot; only you can use <code>/admins</code>.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetAllUsers.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "getAuthenticatedUser",
    "type": "GET",
    "url": "/v1/user/profile",
    "title": "Find Logged in User data (Profile Information)",
    "description": "<p>Find the user details of the logged in user from its Token. (without specifying his ID)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetAuthenticatedUser.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "registerUser",
    "type": "post",
    "url": "/v1/register",
    "title": "Register User (create client)",
    "description": "<p>Register users as (client).</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "first_name",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "last_name",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "gender",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "birth",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "address",
            "description": "<p>(optional) - Only if doctor</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "phone",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "doctor_serial_number",
            "description": "<p>(optional) - Only if doctor</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "speciality",
            "description": "<p>(optional) - Only if doctor</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/User/UI/API/Routes/RegisterUser.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "updateUser",
    "type": "put",
    "url": "/v1/users/:id",
    "title": "Update User",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "first_name",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "lasst_name",
            "description": "<p>(optional)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/User/UI/API/Routes/UpdateUser.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "wepay",
    "name": "createWepayAccount",
    "type": "post",
    "url": "/v1/user/payments/accounts/wepay",
    "title": "Create wepay Account",
    "description": "<p>Before calling this endpoint make sure to call wepay first and get the <code>customer_id</code>. You may use &quot;Wepay Checkout&quot; or &quot;wepay.js&quot; to make your Wepay call. This Information will be used to charge the User whenever he to purchase anything on the platform.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "description",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "type",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "imageUrl",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "gaqDomains",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "mcc",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "country",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "currencies",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nickname",
            "description": ""
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n   \"message\":\"wepay account created successfully.\",\n   \"wepay_account_id\":1\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Wepay/UI/API/Routes/CreateWepayAccount.v1.private.php",
    "groupTitle": "wepay"
  }
] });
