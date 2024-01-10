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
  }
] });
