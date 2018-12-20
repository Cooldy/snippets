# ActiveCampaign

# General things
It has site tracking with js snippet as well API event tracking
The js snippet tracks page views and the API tracks everything else. It is used for other stuff as well

The tracking itself happens after an email has been sent to active campaign. That could happen automatically with AC features: 
- email sent from AC
- AC form

To send an email from the js snippet you have to add it in the snippet variable 
```javascript
function acTrackVisit() {
	var trackcmp_email = 'test@email.com';
    ...
}
```
That way the activity that is being recorded will be recorded for that email

**api doc** - https://developers.activecampaign.com/v3/reference#update-a-group
**sdk examples** - https://github.com/ActiveCampaign/activecampaign-api-php/blob/master/examples.php
