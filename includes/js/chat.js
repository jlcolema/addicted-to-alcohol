// This file contains code to initialize chat as well as 
// handle the population of hidden form fields.

function generateRandom() {
    var array = new Uint32Array(1);
    window.crypto.getRandomValues(array);
    return array[0];
}

function setCookie(name, value, days) {
    var expires = '';
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = '; expires=' + date.toUTCString();
    }
    document.cookie = name + '=' + (value || '') + expires + '; path=/';
}

function getCookie(name) {
    name = name + '=';
    var cookiesArray = document.cookie.split(';');
    for (var i = 0; i < cookiesArray.length; i++) {
        var cookie = cookiesArray[i];
        while (cookie.charAt(0) === ' ') {
            cookie = cookie.substring(1, cookie.length);
        }
        if (cookie.indexOf(name) === 0) {
            return cookie.substring(name.length, cookie.length);
        }
    }
    return null;
}

function processQueryString() {
    var urlParams = new URLSearchParams(window.location.search);
    urlParams.forEach((value, key) => {
        setCookie(key, value, 90);
    });
}

function populateForms() {
    var elements;
    var element;

    // Get GA tracking IDs
    var tracker = ga.getAll()[0];
    var clientId = tracker.get('clientId');
    var trackingId = tracker.get('trackingId');

    elements = document.querySelectorAll('#GACLIENTID');
    for (var i = 0; i < elements.length; i++) {
        element = elements[i];
        element.value = clientId;
    }

    elements = document.querySelectorAll('#GATRACKID');
    for (var i = 0; i < elements.length; i++) {
        element = elements[i];
        element.value = trackingId;
    }

    elements = document.getElementsByClassName('sfwtl');
    for (var i = 0; i < elements.length; i++) {
        element = elements[i];
        element.value = '00D1N000000Gj8P';
    }

    if (!getCookie('mysite_referrer')) {
        document.cookie = "mysite_referrer=" + document.referrer;
    }

    var utm_medium = getCookie('utm_medium');
    if (utm_medium) {
        elements = document.querySelectorAll('#utm_medium');
        if (elements.length > 0) {
            for (let i = 0; i < elements.length; i++) {
                element = elements[i];
                element.value = utm_medium;
            }
        }
    }

    var utm_term = getCookie('utm_term');
    if (utm_term) {
        elements = document.querySelectorAll('#utm_term');
        if (elements.length > 0) {
            for (let i = 0; i < elements.length; i++) {
                element = elements[i];
                element.value = utm_term;
            }
        }
    }

    var utm_campaign = getCookie('utm_campaign');
    if (utm_campaign) {
        elements = document.querySelectorAll('#utm_campaign');
        if (elements.length > 0) {
            for (let i = 0; i < elements.length; i++) {
                element = elements[i];
                element.value = utm_campaign;
            }
        }
    }

    var utm_content = getCookie('utm_content');
    if (utm_content) {
        elements = document.querySelectorAll('#utm_content');
        if (elements.length > 0) {
            for (let i = 0; i < elements.length; i++) {
                element = elements[i];
                element.value = utm_content;
            }
        }
    }

    var utm_source = getCookie('utm_source');
    if (utm_source) {
        elements = document.querySelectorAll('#utm_source');
        if (elements.length > 0) {
            for (let i = 0; i < elements.length; i++) {
                element = elements[i];
                element.value = utm_source;
            }
        }
	if (utm_source === 'google') {
          elements = document.querySelectorAll('[id="00N1N00000Ovqdf"]');
          if (elements.length > 0) {
              for (let i = 0; i < elements.length; i++) {
                  element = elements[i];
                  element.value = 'Google';
              }
          }
        }
    }

    elements = document.querySelectorAll('#landing_page');
    if (elements.length > 0) {
        for (let i = 0; i < elements.length; i++) {
            element = elements[i];
            element.value = window.location.href;
        }
    }
    
    var mysite_referrer = getCookie('mysite_referrer');
    if (mysite_referrer) {
        elements = document.querySelectorAll('#referral_page');
        if (elements.length > 0) {
            for (let i = 0; i < elements.length; i++) {
                element = elements[i];
                element.value = mysite_referrer;
            }
        }
    }
    
    var gclid = getCookie('gclid');
    if (gclid) {
        elements = document.querySelectorAll('#gclid');
        if (elements.length > 0) {
            for (let i = 0; i < elements.length; i++) {
                element = elements[i];
                element.value = gclid;
            }
        }
    }
}


function togglePopUp() {
    var sleepPopUp = !!getCookie('sleep_pop_up');
    var popUpContentContainer = document.getElementById('chat-button-pop-up-content-container');
    var popUpContent = document.getElementById('chat-button-pop-up-content');

    if (!sleepPopUp) {
      popUpContentContainer.style.animation = 'chatPopUpSlide 5s 3s';
      popUpContent.style.animation = 'displayPopUpText 5s 3s';

      setCookie('sleep_pop_up', '1', 7);
    }
  }
  togglePopUp();

// Check the cookies to see if a chat_id already exists, otherwise, create one
function getChatID(chatIDName) {
  var chatID = getCookie(chatIDName);

  if (!chatID) {
    chatID = generateRandom();
    setCookie(chatIDName, chatID, 90);
  }
  return chatID;
}

function getGAIds() {
  var tracker = ga.getAll()[0];
  var clientId = tracker.get('clientId');
  var trackingId = tracker.get('trackingId');

  var GAIds = {
      'client_id': clientId,
      'tracking_id': trackingId
  };

  return GAIds;
}

function observeSnapIn() {
  // Clicking the custom button activates the snap-in chat
  var chatHandler = function() {
    if (typeof (window.embedded_svc) !== 'undefined') {
      window.embedded_svc.onHelpButtonClick();
    }
  };
  var chatButton = document.getElementById('chat-button');
  chatButton.addEventListener('click', chatHandler);

  // Define function to observe the chat container if a certain class
  // is found
  function observeModalContainer(classList) {
    if (classList && classList.contains('modalContainer')) {
      // Get relevant DOM items
      var chatButton = document.getElementById('chat-button');
      var chatButtonPopUpContainer = document.getElementById('chat-button-pop-up-container');
      var modalContainer = document.getElementsByClassName('modalContainer')[0];

      // Create an object containing the options to observer
      var config = { attributes: true };

      // Create the callback function to execute when mutations are observed
      var callback = function(mutationsList, observer) {
        for (var i = 0; i < mutationsList.length; i++) {
	  var mutation = mutationsList[i];
          // If the sidebar is minimized, make sure that the custom
          // chat button has a display of none
          if (mutation.type == 'attributes'
                && mutation.attributeName == 'class'
                && (mutation.target.classList.contains('sidebarMinimized')
                || mutation.target.classList.contains('sidebarMaximized'))) {
              chatButton.style.display = 'none';
              chatButtonPopUpContainer.style.display = 'none';
          }
        }
      };

      var observer = new MutationObserver(callback);

      // Start observing the target node for configured mutations
      observer.observe(modalContainer, config);
    }
  }

  // Define function to observe the help button if a certain class is
  // found
  function observeHelpButton(classList) {
    // Look for the embeddedServiceHelpButton in the classList
    if (classList && classList.contains('embeddedServiceHelpButton')) {
      // Get relevant DOM items
      var chatButton = document.getElementById('chat-button');
      var chatButtonPopUpContainer = document.getElementById('chat-button-pop-up-container');
      var snapInButton = document.getElementsByClassName('embeddedServiceHelpButton')[0];

      // Create an object containing the options to observe
      var config = { attributes: true };

      // Callback function to execute when mutations are observed
      var callback = function(mutationsList, observer) {
        for(var i = 0; i < mutationsList.length; i++) {
	    var mutation = mutationsList[i];
            if (mutation.type == 'attributes') {
                if (mutation.attributeName == 'style') {
                  chatButton.style.display = snapInButton.style.display;
                  chatButtonPopUpContainer.style.display = 'flex';
                }
            }
        }
      };

      // Create a new observer instance linked to the callback function
      var observer = new MutationObserver(callback);

      // Start observing the target node for configured mutations
      observer.observe(snapInButton, config);
    }
  }

  var callback = function(mutations, observer) {
    for (var i = 0; i < mutations.length; i++) {
      var mutation = mutations[i];
      var addedNodes = mutation.addedNodes;
      if (!addedNodes) {
        return
      }

      for (var j = 0; j < addedNodes.length; j++) {
	var addedNode = addedNodes[j];
        var classList = addedNode.classList;

        observeHelpButton(classList);
        observeModalContainer(classList);
      };
    };
  };

  // Determine observer config
  var config = { childList: true, subtree: true };
  var observer = new MutationObserver(callback);
  observer.observe(document, config);
}

function initializeChat() {
  // Get GA Ids
  var GAIds = getGAIds();

  var initESW = function(gslbBaseURL) {
      embedded_svc.settings.displayHelpButton = true; //Or false
      embedded_svc.settings.language = ''; //For example, enter 'en' or 'en-US'

      embedded_svc.settings.enabledFeatures = ['LiveAgent'];
      embedded_svc.settings.entryFeature = 'LiveAgent';

  // Set the bot avatar image
  embedded_svc.settings.chatbotAvatarImgURL = "https://springhillrecovery.com/wp-content/themes/the-meadows/imgs/robot.jpg";

  // Get variables that will be passed into the prechat
  var randomID = getChatID('chat_id');
  var utm_medium = getCookie('utm_medium');
  var utm_term = getCookie('utm_term');
  var utm_campaign = getCookie('utm_campaign');
  var utm_content = getCookie('utm_content');
  var utm_source = getCookie('utm_source');
  var landing_page = window.location.hostname + window.location.pathname;
  var referring_page = document.referrer;
  var gclid = getCookie('gclid');
  var lead_source = 'Chat';
  var sub_lead_source = utm_source || 'Spring Hill Chat';
  var client_id = GAIds['client_id'];
  var tracking_id = GAIds['tracking_id'];

  // Send the agent additional information
  embedded_svc.settings.extraPrechatFormDetails = [{
    "label": "Chat_ID",
    "value": `${randomID}`,
    "transcriptFields": ["Chat_ID__c"]
  }, {
    "label": "First Name",
    "value": "chat",
  }, {
    "label": "Last Name",
    "value": randomID,
  }, {
    "label": "UTM Medium",
    "value": utm_medium
  }, {
    "label": "UTM Term",
    "value": utm_term
  }, {
    "label": "UTM Campaign",
    "value": utm_campaign
  }, {
    "label": "UTM Content",
    "value": utm_content
  }, {
    "label": "UTM Source",
    "value": utm_source
  }, {
    "label": "Landing Page",
    "value": landing_page
  }, {
    "label": "Referring Page",
    "value": referring_page
  }, {
    "label": "GCLID",
    "value": gclid
  }, {
    "label": "Lead Source",
    "value": lead_source
  }, {
    "label": "Sub Lead Source",
    "value": sub_lead_source
  }, {
    "label": "Client ID",
    "value": client_id
  }, {
    "label": "Tracking ID",
    "value": tracking_id
  }];

  embedded_svc.init(
    'https://campaigneast1.my.salesforce.com',
    'https://campaigneast1.secure.force.com/liveAgentSetupFlow',
    gslbBaseURL,
    '00D1N000000Gj8P',
    'Spring_Hill_Chat_Agents',
    {
      baseLiveAgentContentURL: 'https://c.la1-c1-iad.salesforceliveagent.com/content',
      deploymentId: '5721N0000008XA5',
      buttonId: '5731N0000008Xzt',
      baseLiveAgentURL: 'https://d.la1-c1-iad.salesforceliveagent.com/chat',
      eswLiveAgentDevName: 'EmbeddedServiceLiveAgent_Parent04I1N000000PBBPUA4_16c0252f6e6',
      isOfflineSupportEnabled: true
    }
  );
};

// Add fields to the pre-chat from
embedded_svc.settings.extraPrechatInfo = [{
  "entityFieldMaps": [{
    "doCreate": true,
    "doFind": true,
    "fieldName": "Chat_ID__c",
    "isExactMatch": true,
    "label": "Chat_ID"
  }, {
    "doCreate": true,
    "doFind": false,
    "fieldName": "FirstName",
    "label": "First Name"
  }, {
    "doCreate": true,
    "doFind": false,
    "fieldName": "LastName",
    "label": "Last Name"
  }, {
    "doCreate": true,
    "doFind": false,
    "fieldName": "UTM_Medium__c",
    "label": "UTM Medium"
  }, {
    "doCreate": true,
    "doFind": false,
    "fieldName": "UTM_Term__c",
    "label": "UTM Term"
  }, {
    "doCreate": true,
    "doFind": false,
    "fieldName": "UTM_Campaign__c",
    "label": "UTM Campaign"
  }, {
    "doCreate": true,
    "doFind": false,
    "fieldName": "UTM_Content__c",
    "label": "UTM Content"
  }, {
    "doCreate": true,
    "doFind": false,
    "fieldName": "UTM_Source__c",
    "label": "UTM Source"
  }, {
    "doCreate": true,
    "doFind": false,
    "fieldName": "Landing_Page__c",
    "label": "Landing Page"
  }, {
    "doCreate": true,
    "doFind": false,
    "fieldName": "Referring_Page__c",
    "label": "Referring Page"
  }, {
    "doCreate": true,
    "doFind": false,
    "fieldName": "GCLID__c",
    "label": "GCLID"
  }, {
    "doCreate": true,
    "doFind": false,
    "fieldName": "LeadSource",
    "label": "Lead Source"
  }, {
    "doCreate": true,
    "doFind": false,
    "fieldName": "Sub_Lead_Source__c",
    "label": "Sub Lead Source"
  }, {
    "doCreate": true,
    "doFind": false,
    "fieldName": "GACLIENTID__c",
    "label": "Client ID"
  }, {
    "doCreate": true,
    "doFind": false,
    "fieldName": "GATRACKID__c",
    "label": "Tracking ID"
  }],
  "entityName": "Lead",
  "saveToTranscript": "Lead"
}, {
  "entityName": "Contact",
  "saveToTranscript": "Contact",
  "showOnCreate": false,
  "entityFieldMaps": [{
    "doCreate": true,
    "doFind": false,
    "fieldName": "FirstName",
    "label": "First Name"
  }, {
    "doCreate": true,
    "doFind": false,
    "fieldName": "LastName",
    "label": "Last Name"
  }, {
    "doCreate": true,
    "doFind": true,
    "fieldName": "Chat_ID__c",
    "isExactMatch": true,
    "label": "Chat_ID"
  }]
}];

  if (!window.embedded_svc) {
    var s = document.createElement('script');
    s.setAttribute('src', 'https://campaigneast1.my.salesforce.com/embeddedservice/5.0/esw.min.js');
    s.onload = function() {
      initESW(null);
    };
    document.body.appendChild(s);
  } else {
    initESW('https://service.force.com');
  }
  
  // Observe the Snap-in for changes
  observeSnapIn();
};

processQueryString();
window.onload = function() {
  populateForms();
  initializeChat();
}
