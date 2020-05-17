<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/api')) {
            // esprit_api_homepage
            if ('/api' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'EspritApiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'esprit_api_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_esprit_api_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'esprit_api_homepage'));
                }

                return $ret;
            }
            not_esprit_api_homepage:

            if (0 === strpos($pathinfo, '/api/list')) {
                // listBlogMobile
                if ('/api/listblogs' === $pathinfo) {
                    return array (  '_controller' => 'EspritApiBundle\\Controller\\DefaultController::listblogAction',  '_route' => 'listBlogMobile',);
                }

                // listCmtMobile
                if (0 === strpos($pathinfo, '/api/listCmt') && preg_match('#^/api/listCmt/(?P<idB>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'listCmtMobile']), array (  '_controller' => 'EspritApiBundle\\Controller\\DefaultController::listCmtAction',));
                }

                // AffReply
                if (0 === strpos($pathinfo, '/api/listrep') && preg_match('#^/api/listrep/(?P<idC>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'AffReply']), array (  '_controller' => 'EspritApiBundle\\Controller\\DefaultController::listReplyAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/api/a')) {
                // AuthMobile
                if (0 === strpos($pathinfo, '/api/auth') && preg_match('#^/api/auth/(?P<username>[^/]++)/(?P<password>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'AuthMobile']), array (  '_controller' => 'EspritApiBundle\\Controller\\DefaultController::AuthAction',));
                }

                // AddCmt
                if (0 === strpos($pathinfo, '/api/addCmt') && preg_match('#^/api/addCmt/(?P<idB>[^/]++)/(?P<idU>[^/]++)/(?P<text>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'AddCmt']), array (  '_controller' => 'EspritApiBundle\\Controller\\DefaultController::addCmtAction',));
                }

                // AddReply
                if (0 === strpos($pathinfo, '/api/addReply') && preg_match('#^/api/addReply/(?P<idC>[^/]++)/(?P<idU>[^/]++)/(?P<text>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'AddReply']), array (  '_controller' => 'EspritApiBundle\\Controller\\DefaultController::addReplyAction',));
                }

            }

        }

        // admin_dashboard
        if ('/admin' === $pathinfo) {
            return array (  '_controller' => 'BackBundle\\Controller\\BackController::indexAction',  '_route' => 'admin_dashboard',);
        }

        // back_homepage
        if ('/index' === $pathinfo) {
            return array (  '_controller' => 'BackBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_homepage',);
        }

        if (0 === strpos($pathinfo, '/pioneer')) {
            // pioneer_homepage
            if ('/pioneer' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'PioneerBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pioneer_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_pioneer_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'pioneer_homepage'));
                }

                return $ret;
            }
            not_pioneer_homepage:

            // addBlogAdmin
            if ('/pioneer/addblog' === $pathinfo) {
                return array (  '_controller' => 'PioneerBundle\\Controller\\BlogController::addAction',  '_route' => 'addBlogAdmin',);
            }

            if (0 === strpos($pathinfo, '/pioneer/li')) {
                // listallBlogAdmin
                if ('/pioneer/listallblog' === $pathinfo) {
                    return array (  '_controller' => 'PioneerBundle\\Controller\\BlogController::listblogAction',  '_route' => 'listallBlogAdmin',);
                }

                // listallFront
                if ('/pioneer/listview' === $pathinfo) {
                    return array (  '_controller' => 'PioneerBundle\\Controller\\BlogController::viewfrontAction',  '_route' => 'listallFront',);
                }

                // LikeCmtFront
                if (0 === strpos($pathinfo, '/pioneer/likeCmt') && preg_match('#^/pioneer/likeCmt/(?P<idc>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'LikeCmtFront']), array (  '_controller' => 'PioneerBundle\\Controller\\BlogController::LikeCmtAction',));
                }

                // LikeReplyFront
                if (0 === strpos($pathinfo, '/pioneer/likeReply') && preg_match('#^/pioneer/likeReply/(?P<idR>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'LikeReplyFront']), array (  '_controller' => 'PioneerBundle\\Controller\\BlogController::LikeReplyAction',));
                }

            }

            // updateBlogAdmin
            if (0 === strpos($pathinfo, '/pioneer/updateblog') && preg_match('#^/pioneer/updateblog/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'updateBlogAdmin']), array (  '_controller' => 'PioneerBundle\\Controller\\BlogController::updateblogAction',));
            }

            if (0 === strpos($pathinfo, '/pioneer/delete')) {
                // deleteBlogAdmin
                if (0 === strpos($pathinfo, '/pioneer/deleteblog') && preg_match('#^/pioneer/deleteblog/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteBlogAdmin']), array (  '_controller' => 'PioneerBundle\\Controller\\BlogController::deleteblogAction',));
                }

                // deleteCmtFront
                if (0 === strpos($pathinfo, '/pioneer/deleteCmt') && preg_match('#^/pioneer/deleteCmt/(?P<idc>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteCmtFront']), array (  '_controller' => 'PioneerBundle\\Controller\\BlogController::deleteCmtAction',));
                }

                // deleteReplyFront
                if (0 === strpos($pathinfo, '/pioneer/deleteReply') && preg_match('#^/pioneer/deleteReply/(?P<idR>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deleteReplyFront']), array (  '_controller' => 'PioneerBundle\\Controller\\BlogController::deleteReplyAction',));
                }

            }

            // singleblogFront
            if (0 === strpos($pathinfo, '/pioneer/singleblog') && preg_match('#^/pioneer/singleblog/(?P<id>[^/]++)/(?P<idU>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'singleblogFront']), array (  '_controller' => 'PioneerBundle\\Controller\\BlogController::singleblogAction',));
            }

            // MarkSeen
            if (0 === strpos($pathinfo, '/pioneer/markseen') && preg_match('#^/pioneer/markseen/(?P<idNotif>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'MarkSeen']), array (  '_controller' => 'PioneerBundle\\Controller\\BlogController::MarkSeenAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/transport')) {
            if (0 === strpos($pathinfo, '/transport/t')) {
                // transport_homepage
                if ('/transport/t1' === $pathinfo) {
                    return array (  '_controller' => 'TransportBundle\\Controller\\DefaultController::indexAction',  '_route' => 'transport_homepage',);
                }

                if (0 === strpos($pathinfo, '/transport/trajet')) {
                    // trajet_homepage
                    if ('/transport/trajet' === $pathinfo) {
                        return array (  '_controller' => 'TransportBundle\\Controller\\DefaultController::trajetAction',  '_route' => 'trajet_homepage',);
                    }

                    if (0 === strpos($pathinfo, '/transport/trajetid')) {
                        // mobile2
                        if (preg_match('#^/transport/trajetid/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile2']), array (  '_controller' => 'TransportBundle\\Controller\\TrajetController::trajetfindAction',));
                        }

                        // mobile55
                        if ('/transport/trajetidzz' === $pathinfo) {
                            return array (  '_controller' => 'TransportBundle\\Controller\\TrajetController::trajetfindbusAction',  '_route' => 'mobile55',);
                        }

                    }

                    // mobile3
                    if ('/transport/trajetall' === $pathinfo) {
                        return array (  '_controller' => 'TransportBundle\\Controller\\TrajetController::allAction',  '_route' => 'mobile3',);
                    }

                    // mobile13
                    if (0 === strpos($pathinfo, '/transport/trajetadd') && preg_match('#^/transport/trajetadd/(?P<name>[^/]++)/(?P<idbus>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile13']), array (  '_controller' => 'TransportBundle\\Controller\\TrajetController::trajetaddAction',));
                    }

                    // mobile51188
                    if (0 === strpos($pathinfo, '/transport/trajetdel') && preg_match('#^/transport/trajetdel/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile51188']), array (  '_controller' => 'TransportBundle\\Controller\\TrajetController::trajetdelAction',));
                    }

                    // mobile588
                    if (0 === strpos($pathinfo, '/transport/trajeteditt') && preg_match('#^/transport/trajeteditt/(?P<name>[^/]++)/(?P<idbus>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile588']), array (  '_controller' => 'TransportBundle\\Controller\\TrajetController::trajetedittAction',));
                    }

                }

                // Transport2_homepage
                if ('/transport/t2' === $pathinfo) {
                    return array (  '_controller' => 'TransportBundle\\Controller\\DefaultController::transportespaceAction',  '_route' => 'Transport2_homepage',);
                }

            }

            elseif (0 === strpos($pathinfo, '/transport/bus')) {
                // bus_homepage
                if ('/transport/bus' === $pathinfo) {
                    return array (  '_controller' => 'TransportBundle\\Controller\\BusController::afficherAction',  '_route' => 'bus_homepage',);
                }

                // busf
                if ('/transport/busf' === $pathinfo) {
                    return array (  '_controller' => 'TransportBundle\\Controller\\BusetcovController::afficherfAction',  '_route' => 'busf',);
                }

                // mobile
                if ('/transport/busall' === $pathinfo) {
                    return array (  '_controller' => 'TransportBundle\\Controller\\BusController::allAction',  '_route' => 'mobile',);
                }

                if (0 === strpos($pathinfo, '/transport/busmobile')) {
                    // mobile4
                    if (preg_match('#^/transport/busmobile/(?P<id>[^/]++)/(?P<name>[^/]++)/(?P<capacite>[^/]++)/(?P<chauffeur>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile4']), array (  '_controller' => 'TransportBundle\\Controller\\BusController::editmobileAction',));
                    }

                    // mobil4
                    if (0 === strpos($pathinfo, '/transport/busmobile3') && preg_match('#^/transport/busmobile3/(?P<name>[^/]++)/(?P<capacite>[^/]++)/(?P<chauffeur>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobil4']), array (  '_controller' => 'TransportBundle\\Controller\\BusController::addmobileAction',));
                    }

                    // mobile5
                    if (0 === strpos($pathinfo, '/transport/busmobile2') && preg_match('#^/transport/busmobile2/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile5']), array (  '_controller' => 'TransportBundle\\Controller\\BusController::deletemobileAction',));
                    }

                }

            }

            // Tback_homepage
            if ('/transport/back' === $pathinfo) {
                return array (  '_controller' => 'TransportBundle\\Controller\\DefaultController::backAction',  '_route' => 'Tback_homepage',);
            }

            if (0 === strpos($pathinfo, '/transport/add')) {
                // add_bus
                if ('/transport/add' === $pathinfo) {
                    return array (  '_controller' => 'TransportBundle\\Controller\\BusController::ajouterAction',  '_route' => 'add_bus',);
                }

                // add_trajet
                if ('/transport/addtr' === $pathinfo) {
                    return array (  '_controller' => 'TransportBundle\\Controller\\TrajetController::ajoutertrAction',  '_route' => 'add_trajet',);
                }

                // add_station
                if (0 === strpos($pathinfo, '/transport/addst') && preg_match('#^/transport/addst/(?P<id>[^/]++)/(?P<m>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'add_station']), array (  '_controller' => 'TransportBundle\\Controller\\StationController::ajouterstAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/transport/affiche')) {
                // afficherdetails
                if ('/transport/affiche' === $pathinfo) {
                    return array (  '_controller' => 'TransportBundle\\Controller\\BusController::afficherAction',  '_route' => 'afficherdetails',);
                }

                // afficherdetailstr
                if ('/transport/affichetr' === $pathinfo) {
                    return array (  '_controller' => 'TransportBundle\\Controller\\TrajetController::affichertrAction',  '_route' => 'afficherdetailstr',);
                }

                // afficherdetailsst
                if (0 === strpos($pathinfo, '/transport/affichest') && preg_match('#^/transport/affichest/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'afficherdetailsst']), array (  '_controller' => 'TransportBundle\\Controller\\StationController::afficherstAction',));
                }

                // afficherbuss
                if ('/transport/afficherbuss' === $pathinfo) {
                    return array (  '_controller' => 'TransportBundle\\Controller\\BusetcovController::afficherbussAction',  '_route' => 'afficherbuss',);
                }

            }

            elseif (0 === strpos($pathinfo, '/transport/edit')) {
                // editdetails
                if (preg_match('#^/transport/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'editdetails']), array (  '_controller' => 'TransportBundle\\Controller\\BusController::modifierAction',));
                }

                // editdetailstr
                if (0 === strpos($pathinfo, '/transport/edittr') && preg_match('#^/transport/edittr/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'editdetailstr']), array (  '_controller' => 'TransportBundle\\Controller\\TrajetController::modifiertrAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/transport/delete')) {
                // deletedetails
                if (preg_match('#^/transport/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deletedetails']), array (  '_controller' => 'TransportBundle\\Controller\\BusController::deleteAction',));
                }

                // deletedetailstr
                if (0 === strpos($pathinfo, '/transport/deletetr') && preg_match('#^/transport/deletetr/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deletedetailstr']), array (  '_controller' => 'TransportBundle\\Controller\\TrajetController::deletetrAction',));
                }

                // deletedetailsst
                if (0 === strpos($pathinfo, '/transport/deletest') && preg_match('#^/transport/deletest/(?P<id>[^/]++)/(?P<id2>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'deletedetailsst']), array (  '_controller' => 'TransportBundle\\Controller\\StationController::deletestAction',));
                }

            }

            // demande
            if ('/transport/demande' === $pathinfo) {
                return array (  '_controller' => 'TransportBundle\\Controller\\BusetcovController::afficherdemandeAction',  '_route' => 'demande',);
            }

            // co
            if ('/transport/co' === $pathinfo) {
                return array (  '_controller' => 'TransportBundle\\Controller\\BusetcovController::affichercoAction',  '_route' => 'co',);
            }

            // offre
            if ('/transport/offre' === $pathinfo) {
                return array (  '_controller' => 'TransportBundle\\Controller\\BusetcovController::afficheroffreAction',  '_route' => 'offre',);
            }

            if (0 === strpos($pathinfo, '/transport/station')) {
                // mobile511288
                if (0 === strpos($pathinfo, '/transport/stationdel') && preg_match('#^/transport/stationdel/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile511288']), array (  '_controller' => 'TransportBundle\\Controller\\StationController::stationdelAction',));
                }

                // mobile5818
                if (0 === strpos($pathinfo, '/transport/stationadd') && preg_match('#^/transport/stationadd/(?P<name>[^/]++)/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile5818']), array (  '_controller' => 'TransportBundle\\Controller\\StationController::stationaddAction',));
                }

                // mobile58148
                if (0 === strpos($pathinfo, '/transport/stationall') && preg_match('#^/transport/stationall/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'mobile58148']), array (  '_controller' => 'TransportBundle\\Controller\\StationController::stationallAction',));
                }

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/notifications')) {
            // notification_list
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_list']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::listAction',));
            }

            // notification_mark_as_seen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/mark_as_seen/(?P<notification>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_as_seen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsSeenAction',));
            }

            // notification_mark_as_unseen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/mark_as_unseen/(?P<notification>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_as_unseen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsUnSeenAction',));
            }

            // notification_mark_all_as_seen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/markAllAsSeen$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_all_as_seen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAllAsSeenAction',));
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
