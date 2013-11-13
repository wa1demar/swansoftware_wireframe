<?php
/**
 * Template Name: Technologies Template
 *
 * Created by PhpStorm.
 * @author: waldemar
 * @date: 18.10.13
 *
 * @note: менять ничего не рекомендую, хрупкий баланс ошибок,
 * компенсирующих друг друга, заставляет программу работать
 */
?>
<?php get_header() ?>
<?php while (have_posts()) : the_post(); ?>
    <?php $bg = get_field('background'); ?>
    <div id="sliderFirst" style="background:  url('<?= $bg ?>') center top;">
        <div class="info-section">
            <?php addSocials($bg) ?>

            <div class="row darck-background">
                <div class="col-lg-12 text-center background">
                    <div class="col-lg-12  technologies-text-phone ">
                        <div class='container'>
                            <h1>Technologies that we use</h1>

                            <div class='content'>
                                <?php the_content() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section id="sliderSecond">

        <div class="container">
            <div class='row'>

                <div class='col-sm-12 text-center'>
                    <?php the_field('technologies') ?>
                </div>
            </div>
        </div>
    </section>
    <section id="sliderThird">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>
                        Services we offer:
                    </h1>

                </div>

            </div>
            <div class="row topBannerLinks">
                <div class="box col-sm-3 col-xs-6 text-center">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_title('Mobile Application Development'))); ?>">
                        <div class="round_image text-center">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/service1_115x100.png">
                        </div>

                        <p>Mobile Development</p>
                    </a>
                </div>
                <div class="box col-sm-3 col-xs-6 text-center">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_title('Staff Augmentation'))); ?>">
                        <div class="round_image">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/service2_115x100.png">
                        </div>

                        <p>Staff Augmentation</p>
                    </a>
                </div>
                <div class="box col-sm-3 col-xs-6 text-center">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_title('Custom Application Development'))); ?>">
                        <div class="round_image">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/service3_115x100.png">
                        </div>

                        <p>Custom Application Development</p>
                    </a>
                </div>
                <div class="box col-sm-3 col-xs-6 text-center">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_title('Design'))); ?>">
                        <div class="round_image">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/service4_115x100.png">
                        </div>

                        <p>Design</p>
                    </a>
                </div>
                <!--<div class="box col-md-2">-->
                <!--<div class="round_image">-->
                <!--<img src="assets/img/service5_115x100.png">-->
                <!--</div>-->


                <!--<p>Internet Marketing</p>-->
                <!--</div>-->
            </div>
            <div class="row myIndicators">
                <ul style="">
                    <li class="mobile active">
                        <a href="#mobile" data-toggle="tab">Mobile Development</a></li>
                    <li class="staff"><a href="#staff" data-toggle="tab">Staf
                            Augmentation</a></li>
                    <li class="app"><a href="#app" data-toggle="tab">Custom
                            Application Development</a></li>
                    <li class="design"><a href="#design" data-toggle="tab">Design</a>
                    </li>
                    <!--<li class="marketing"><a href="#">Internet Marketing</a></li>-->
                </ul>

                <div class="box col-sm-3 col-xs-3 text-center">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_title('Mobile Application Development'))); ?>" data-target="#carousel-example-generic" data-slide-to="1" class="active">
                        <div class="round_image text-center">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/service1_115x100.png">
                        </div>

                        <p>Mobile Development</p>
                    </a>
                </div>
                <div class="box col-sm-3 col-xs-3 text-center">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_title('Staff Augmentation'))); ?>" data-target="#carousel-example-generic" data-slide-to="2">
                        <div class="round_image">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/service2_115x100.png">
                        </div>

                        <p>Staff Augmentation</p>
                    </a>
                </div>
                <div class="box col-sm-3 col-xs-3 text-center">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_title('Custom Application Development'))); ?>" data-target="#carousel-example-generic" data-slide-to="3">
                        <div class="round_image">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/service3_115x100.png">
                        </div>

                        <p>Custom Application Development</p>
                    </a>
                </div>
                <div class="box col-sm-3 col-xs-3 text-center">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_title('Design'))); ?>" data-target="#carousel-example-generic" data-slide-to="4">
                        <div class="round_image">
                            <img src="<?php bloginfo('template_directory') ?>/assets/img/service4_115x100.png">
                        </div>

                        <p>Design</p>
                    </a>
                </div>
            </div>


        </div>

    </section>
    <section id="sliderFour">
    <div class="container">
    <div id="wrapper" class='row tab1'>
    <div class='col-sm-3'>
        <ul class='link-list nav nav-tabs' id="myTab">
            <li class="active"><a href="#java" data-toggle="tab">Java tool set</a></li>
            <li><a href="#ruby" data-toggle="tab">Ruby tool set</a></li>
            <li><a href="#net" data-toggle="tab">.NET tool set</a></li>
            <li><a href="#js" data-toggle="tab">JavaScript tool set</a></li>
            <li><a href="#phone" data-toggle="tab">Smartphone tool set</a></li>
        </ul>
    </div>
    <div class='col-sm-9 left-border-dotted tab-content'>
    <div class="tab-pane active" id="java">
        <div class='col-sm-4 col-xs-6 '>
            <ul>
                <li>Java platform </li>
                <li>Java language</li>
                <li>JVM</li>
                <li>Standard Edition</li>
                <li>Enterprise Edition</li>
            </ul>
            <ul>
                <li>Sun technologies</li>
                <li>Squawk</li>
                <li>Java Development Kit</li>
                <li>OpenJDK</li>
                <li>Java virtual machine  </li>
                <li>JavaFX</li>
                <li>Maxine VM</li>
            </ul>
            <ul>

                <li>Platform technologies</li>
                <li>Applets</li>
                <li>Servlets</li>
                <li>jsp</li>
                <li>Web Start (jnlp)</li>
            </ul>

        </div>
        <div class='col-sm-4 col-xs-6'>
            <ul>
                <li>Web Frameworks</li>
                <li>Apache Struts</li>
                <li>AppFuse</li>
                <li>Flexive</li>
                <li>GWT</li>
                <li>Grails</li>
                <li>Vaadin</li>
                <li>ItsNat</li>
                <li>JavaServer Faces</li>
                <li>Jspx</li>
                <li>Makumba</li>
                <li>OpenXava</li>
                <li>Play</li>
                <li>Eclipse RAP</li>
                <li>Reasonable Server Faces</li>
                <li>RIFE</li>
                <li>Seam</li>
                <li>Spring</li>
                <li>Stripes</li>
                <li>Tapestry</li>
                <li>WebWork</li>
                <li>Wicket</li>
                <li>ZK</li>
                <li>ICEfaces</li>
                <li>WaveMaker</li>
            </ul>
         </div>
       <div class='col-sm-4 col-xs-6'>
           <ul>

               <li>Major third-party technologies</li>
               <li>JRockit</li>
               <li>GNU Classpath</li>
               <li>Kaffe</li>
               <li>TopLink</li>
               <li>Apache Harmony</li>
               <li>Apache Struts</li>
               <li>Spring framework</li>
               <li>Hibernate</li>
               <li>JBoss application server</li>
               <li>Tapestry</li>
               <li>Jazelle</li>
           </ul>
           <ul>
               <li>Major programming languages</li>
               <li>BeanShell</li>
               <li>Clojure</li>
               <li>Groovy</li>
               <li>Java Tcl</li>
               <li>JRuby</li>
               <li>Jython</li>
               <li>AspectJ</li>
           </ul>
        </div>
    </div>
    <div class="tab-pane" id="ruby">
        <div class='col-sm-4 col-xs-6 '>
            <ul>
                <li>IDE</li>
                <li>NetBeans</li>
                <li>RubyForge</li>
                <li>RadRails</li>
                <li>RubyMine</li>
                <li>ActiveState Komodo</li>
            </ul>
            <ul>
                <li>Implementations</li>
                <li>Ruby MRI</li>
                <li>YARV</li>
                <li>JRuby</li>
                <li>IronRuby</li>
                <li>Rubinius</li>
                <li>XRuby</li>
                <li>MacRuby</li>
                <li>RubyJS</li>
                <li>HotRuby</li>
            </ul>
            <ul>
                <li>Applications</li>
                <li>RubyGems</li>
                <li>Rake</li>
                <li>Interactive Ruby Shell</li>
                <li>Capistrano</li>
            </ul>
            <ul>
                <li>Libraries and frameworks</li>
                <li>JAdhearsion</li>
                <li>Camping</li>
                <li>eRuby (RHTML)</li>
                <li>Hobo</li>
                <li>Merb</li>
                <li>Nitro</li>
                <li>Ruby on Rails</li>
                <li>Ramaze</li>
                <li>Sinatra</li>
                <li>QtRuby</li>
                <li>Rhomobile</li>
            </ul>

            <ul>
                <li>Server software</li>
                <li>Mongrel</li>
                <li>Phusion Passenger (mod_rails/mod_rack)</li>
                <li>WEBrick</li>
                <li>mod_ruby</li>
            </ul>


            <ul>
                <li id='weight-li'>
                    Ruby Gems and related tools
                </li>
            </ul>
            <ul>
                <li>Data Persistence</li>
                <li>Amazon DynamoDB: active_dynamodb and dynoid</li>
                <li>CouchDB Clients: Couchrest, Couchrest-rails, Couch potato, Couch foo, SimplyStored, and more</li>
                <li>CSV Parsers: FasterCSV, fasterer-csv, simple_importer, ccsv, rcsvreader, and more</li>
                <li>MongoDB Clients: Mongoid, Mongomapper, Mongo Ruby Driver, and Mongomatic</li>
                <li>Object-relational mapping: Active Record, Sequel, ORM Adapter, DataMapper, and og</li>
                <li>Redis Clients: Redis Ruby, Redis Store, Ohm, Redis Objects, redis_orm, and 1 more</li>
                <li>SQL Database Adapters: mysql, sqlite3-ruby, pg, mysql2, sqlite3, and more</li>
            </ul>

        </div>
        <div class='col-sm-4 col-xs-6'>
            <ul>
                <li>Testing</li>
                <li>A/B Testing: Vanity, seven_minute_abs, Split, and ABingo</li>
                <li>Acceptance Test Frameworks: Cucumber, Steak, Spinach, Coulda, Stella, and morev</li>
                <li>Browser testing: Capybara, Webrat, Culerity, Celerity, capybara-webkit, and more</li>
                <li>Continuous Testing: Guard, Watchr, Autotest, and Infinity Test</li>
                <li>Cucumber Steps: email_spec, pickle, aruba, Cucumber Factory, MundoPepino, and more</li>
                <li>Cucumber Tools: cucumber-nagios, cucumber-sinatra, cucover, cucumber-screenshot, Stepdown, and 2
                    more
                </li>
                <li>Distributed Testing: Spork, Parallel tests, Hydra, Testjour, Deep-test, and more</li>
                <li>Mocking: rspec-mocks, Mocha, Rr, Flexmock, Stump, and 2 more</li>
                <li>Mocking Web Requests: Fakeweb, Webmock, VCR, Jquery-mockjax, Artifice, and more</li>
                <li>Rails Fixture Replacement: Factory girl, Machinist, Fabrication, Object daddy, Dataset, and more
                </li>
                <li>Random Data Generation: Faker, Forgery, Randexp, and Random data</li>
                <li>Testing Rails Engines: combustion, test_engine, and multiengine</li>
                <li>Test::Unit Extensions: Shoulda, Contest, Context, and Pending</li>
                <li>Time Warping: Timecop, Delorean, Time-warp, and Time-zone-warp</li>
                <li>Unit Test Frameworks: RSpec, Minitest, Riot, Bacon, Wrong, and more</li>
            </ul>


        </div>
        <div class='col-sm-4 col-xs-6'>
            <ul>
                <li>WebApps,Services & Interaction</li>
                <li>API Builders: Grape and apiary</li>
                <li>API Clients: Twitter, Linkedin, Garb, Twitter oauth, Ruby-cloudfiles, and more</li>
                <li>Atom & RSS Feed Parsing: Feedzirra, Simple-rss, Feed-normalizer, ratom, Feed me, and 2 more</li>
                <li>HTML parsing: Nokogiri, Hpricot, Libxml-ruby, Scrubyt, and Scrapi</li>
                <li>HTTP clients: Rest-client, Httparty, Mechanize, Curb, em-http-request, and more</li>
                <li>HTTP Pub/Sub: faye, private_pub, and em-websocket</li>
                <li>JSON Parsers: json, json pure, crack, yajl-ruby, and json-jruby</li>
                <li>Rails Controller Abstractions: Inherited resources, Resource controller, Make resourceful,
                    DecentExposure, and Resources controller
                </li>
                <li>SOAP Clients: Savon, Handsoap, and Serviceproxy</li>
                <li>Social Network Builders: Diaspora, Insoshi, Communityengine, Lovd-by-less, Enginey, and more</li>
                <li>URL Rewriting: rack-rewrite, Refraction, and redirect</li>
                <li>User Agent Detection: useragent, user-agent, active_device, divining_rod, rack-useragent-filter, and
                    more
                </li>
                <li>Web Analytics: Garb, gattica, Rugalytics, rack-google-analytics, rack_clicky, and more</li>
                <li>Web App Frameworks: Ruby on Rails, Sinatra, Padrino, Cramp, Merb, and more</li>
                <li>Web Content Scrapers: Pismo, data_miner, and metainspector</li>
                <li>XML Mapping: Happymapper, Sax-machine, Roxml, Gyoku, nori, and more</li>

            </ul>


        </div>


    </div>
    <div class="tab-pane" id="net">
    <div class='col-sm-4 col-xs-6 '>
        <ul>
            <li>Architecture</li>
            <li>Base Class Library</li>
            <li>Common Language Runtim</li>
            <li>Code Access Security</li>
            <li>Assembly</li>
            <li>Metadata</li>
            <li>COM Interop</li>
        </ul>
        <ul>
            <li>Common Language Infrastructure (CLI)</li>
            <li>Common Language Infrastructure</li>
            <li>Common Type System</li>
            <li>Common Intermediate Language</li>
            <li>Virtual Execution System</li>
        </ul>
        <ul>
            <li>CLI Languages</li>
            <li>C#</li>
            <li>Visual Basic .NET</li>
            <li>C++/CLI</li>
            <li>Managed</li>
            <li>J#</li>
            <li>JScript .NET</li>
            <li>Windows PowerShell</li>
        </ul>
        <ul>
            <li>Components</li>
            <li>ADO.NET</li>
            <li>Entity Framework</li>
            <li>Data Services</li>
            <li>ASP.NET</li>
            <li>AJAX</li>
            <li>MVC</li>
            <li>Dynamic Data</li>
            <li>Language Integrated Query</li>
            <li>CardSpace</li>
            <li>ClickOnce</li>
            <li>Communication Foundation</li>
            <li>Dynamic Language Runtime</li>
            <li>Forms</li>
            <li>CardSpace</li>
        </ul>
        <ul>
            <li>Server-side</li>
            <li>Active Server Pages</li>
            <li>CommonJS</li>
            <li>Remoting</li>
            <li>Workflow Foundation</li>
            <li>XAML</li>
            <li>Parallel Extensions</li>
            <li>Managed Extensibility Framework</li>
        </ul>

        <ul>
            <li>Other implementations</li>
            <li>Mono</li>
        </ul>
    </div>
    <div class='col-sm-4 col-xs-6'>
        <ul>
            <li>Web</li>
            <li>MSHTML</li>
            <li>RSS Platform</li>
            <li>JScript</li>
            <li>VBScript</li>
            <li>BHO</li>
            <li>XDR</li>
            <li>SideBar Gadgets</li>

        </ul>

        <ul>
            <li>Data access</li>
            <li>Data Access Components</li>
            <li>Extensible Storage Engine</li>
            <li>ADO.NET</li>
            <li>ADO.NET Entity Framework</li>
            <li>Jet Engine</li>
            <li>MSXML</li>
            <li>OLE DBL</li>
            <li>OPC</li>
        </ul>
        <ul>
            <li>Communication</li>
            <li>Messaging API</li>
            <li>WCF</li>

        </ul>

        <ul>
            <li>Networking</li>
            <li>Winsock</li>
            <li>Winsock Kernel</li>
            <li>Filtering Platform</li>
            <li>Network Driver Interface Specification</li>
            <li>Windows Rally</li>
            <li>BITS</li>
            <li>P2P API</li>
            <li>MSMQ</li>
            <li>MS MPI</li>
            <li>DirectPlay</li>
        </ul>
        <ul>
            <li>Administration and management</li>
            <li>Win32 console</li>
            <li>Windows Script Host</li>
            <li>WMI (extensions)</li>
            <li>PowerShell</li>
            <li>Task Scheduler</li>
            <li>Offline Files</li>
            <li>Shadow Copy</li>
            <li>Windows Installer</li>
            <li>Error Reporting</li>
            <li>Event Log</li>
            <li>Common Log File System</li>
        </ul>
        <ul>
            <li>Component model</li>
            <li>COM</li>
            <li>COM+</li>
            <li>ActiveX</li>
            <li>Distributed Component Object Model</li>

        </ul>
    </div>
    <div class='col-sm-4 col-xs-6'>
        <ul>
            <li>Libraries</li>
            <li>Base Class Library (BCL)
            </li>
            <li>Microsoft Foundation Classes (MFC)</li>
            <li>Active Template Library (ATL)</li>
            <li>Windows Template Library (WTL)</li>

        </ul>
        <ul>
            <li>Device drivers</li>
            <li>Windows Driver Model</li>
            <li>Windows Driver Foundation</li>

        </ul>

        <ul>
            <li>Security</li>
            <li>Crypto API</li>
            <li>CAPICOM</li>
            <li>Windows CardSpace</li>
            <li>Data Protection API</li>
            <li>Security Support Provider Interface (SSPI)</li>


        </ul>
        <ul>
            <li>.NET</li>
            <li>ASP.NET</li>
            <li>ADO.NET</li>
            <li>Base Class Library (BCL)</li>
            <li>Remoting</li>
            <li>SharePoint</li>
            <li>Silverlight</li>
            <li>TPL</li>
            <li>WCF</li>
            <li>WCS</li>
            <li>WPF</li>
            <li>WF</li>


        </ul>
        <ul>
            <li>Software factories</li>
            <li>EFx Factory</li>
            <li>Enterprise Library</li>
            <li>Composite UI</li>
            <li>CCF</li>
            <li>CSF</li>


        </ul>
        <ul>
            <li>IPC</li>
            <li>MSRPC</li>
            <li>Dynamic Data Exchange (DDE)</li>
            <li>Remoting</li>
            <li>WCF</li>


        </ul>
        <ul>
            <li>Accessibility</li>
            <li>Active Accessibility</li>
            <li>UI Automation</li>


        </ul>
        <ul>
            <li>Text and multilingual support</li>
            <li>DirectWrite</li>
            <li>Text Services Framework</li>
            <li>Text Object Model</li>
            <li>Input method editor</li>
            <li>Language Interface Pack</li>
            <li>Multilingual User Interface</li>
            <li>Uniscribe</li>


        </ul>
    </div>

    </div>
    <div class="tab-pane" id="js">
        <div class='col-sm-4 col-xs-6 '>
            <ul>
                <li>Code analysis</li>
                <li>JavaScriptLint</li>
                <li>JSHint</li>
                <li>JSLint</li>

            </ul>
            <ul>
                <li>Compilers</li>
                <li>CoffeeScript</li>
                <li>Google Closure Compiler</li>
                <li>Google Web Toolkit</li>
                <li>Morfik</li>
                <li>Script#</li>
            </ul>
            <ul>
                <li>Concepts</li>
                <li>Ajax</li>
                <li>VClient-side</li>
                <li>JavaScript library</li>
                <li>Dynamic HTML</li>
                <li>JavaScript syntax</li>
                <li>Unobtrusive JavaScript</li>

            </ul>
        </div>
        <div class='col-sm-4 col-xs-6'>
            <ul>
                <li>Debuggers</li>
                <li>Firebug</li>
                <li>Opera Dragonfly</li>
                <li>Microsoft Script Editor</li>
                <li>Microsoft Script Debugger</li>
                <li>Microsoft Visual Studio</li>
                <li>Microsoft Visual Web Developer Express</li>
                <li>Venkman</li>
                <li>Web Inspector</li>

            </ul>
            <ul>
                <li>Doc generators</li>
                <li>JSDoc</li>
            </ul>

            <ul>
                <li>Web Frameworks</li>
                <li>Ample SDK</li>
                <li>Prototype JavaScript Framework</li>
                <li>Rico</li>
                <li>script.aculo.us</li>
                <li>SproutCore</li>
                <li>jQuery</li>
                <li>Dojo Toolkit</li>
            </ul>
        </div>
        <div class='col-sm-4 col-xs-6'>
            <ul>
                <li>Related technologies</li>
                <li>Cascading Style Sheets</li>
                <li>Document Object Model</li>
                <li>HTML</li>
                <li>JSON</li>


            </ul>

            <ul>
                <li>Server-side</li>
                <li>Active Server Pages</li>
                <li>CommonJS</li>
                <li>Node.js</li>

            </ul>
            <ul>
                <li>Unit testing</li>
                <li>JSUnit</li>


            </ul>
        </div>


    </div>
    <div class="tab-pane" id="phone">


        <div class='col-sm-6 col-xs-6 '>
            <p>Development</p>
            <ul>
                <li>Development</li>
                <li>Android software development</li>
                <li>SDK</li>
                <li>NDK</li>
                <li>Android Open Accessory Development Kit</li>
                <li>APK</li>
                <li>Apache Ant</li>
                <li>Dalvik</li>
                <li>Developer Challenge</li>
                <li>Developer Lab</li>
                <li>Eclipse</li>
                <li>Google Code</li>
                <li>Google App Inventor</li>
                <li>Google I/O</li>
                <li>Renderscript</li>
                <li>Android Debug Bridge
                </li>
                <li>Fastboot</li>
                <li>   Microbridge</li>


            </ul>
            <ul>
                <li>Google Nexus</li>
                <li>Nexus One</li>
                <li>Nexus S</li>
                <li>Galaxy Nexus</li>

            </ul>
            <ul>
                <li>Code analysis</li>
                <li>JavaScriptLint</li>
                <li>JSHint</li>
                <li>JSLint</li>

            </ul>
            <ul>
                <li>Alternative interfaces</li>
                <li>HTC Sense</li>
                <li>Motorola Motoblur</li>
                <li>Samsung TouchWiz</li>

            </ul>
           <ul>
                <li>Apps</li>
                <li>Earth </li>
                <li>Goggles </li>
                <li>Gmail</li>
                <li>Maps</li>
                <li>Sky Map</li>
                <li>Talk</li>
                <li>Translate</li>
                <li>Voice</li>
                <li>YouTube</li>

            </ul>
           <ul>
                <li>Services</li>
                <li>Google Play</li>
                <li>Google Search</li>
                <li>Android Cloud to Device Messaging</li>
                <li>Service (C2DM)</li>

            </ul>

        </div>



        <div class='col-sm-6 col-xs-6 '>
            <p>iOS</p>
            <ul>
                <li>Generations</li>
                <li>Original</li>
                <li>3G</li>
                <li>3GS</li>
                <li>4 </li>
                <li>4S</li>

            </ul>
            <ul>
                <li>Features</li>
                <li>iBooks</li>
                <li>iBookstore</li>
                <li>iCloud</li>
                <li>iTunes Store</li>
                <li>iMovie</li>
                <li>iMessage</li>
                <li>iPod (Music)</li>
                <li>Mail</li>
                <li>Maps</li>
                <li>Safari (versions)</li>
                <li>Siri</li>
                <li>Spotlight</li>
                <li>SpringBoard</li>
                <li>Newsstand</li>
                <li>Find My Friends</li>
                <li>App Store</li>
                <li>Game Center</li>
                <li>iAd</li>
                <li>Push Notifications</li>
                <li>Cards</li>
                <li>FaceTime</li>
                <li>Notification Center</li>
            <li>YouTube</li>
            </ul>
            <ul>
                <li>Supporting software</li>
                <li>Cocoa Touch</li>
                <li>Core Animation</li>
                <li>iTunes</li>
                <li>SDK</li>
                <li>VoiceOver</li>
                <li>WebKit</li>

            </ul>
            <ul>
                <li >IOS SDK</li>
                <li class = 'sub-topic'>Cocoa Touch</li>
                <li>Multi-touch events and controls</li>
                <li>Accelerometer support</li>
                <li>View hierarchy</li>
                <li>Localization (i18n)</li>
                <li>Camera support</li>
                <li>Media</li>
                <li>OpenAL</li>
                <li>audio mixing and recording</li>
                <li>Video playback</li>
                <li>Image file formats</li>
                <li>Quartz</li>
                <li>Core Animation</li>
                <li>OpenGL ES</li>
                <li class = 'sub-topic'>Core Services</li>
                <li>Networkingv</li>
                <li>Embedded SQLite database</li>
                <li>Core Location</li>
                <li>Threads</li>
                <li>CoreMotion</li>
                <li class = 'sub-topic'>Mac OS X Kernel</li>
                <li>TCP/IP</li>
                <li>Sockets</li>
                <li>Power management</li>
                <li>File system</li>
                <li>Security</li>


            </ul>
        </div>


    </div>
    </div>
    </div>
    </div>

    </section>

<?php endwhile; ?>

    <script>
        $(function () {
            $("#myTab a:first").tab('show')
        })
    </script>

<?php get_footer() ?>