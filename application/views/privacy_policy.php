<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <?php $this->load->view("head");?>
  <body>
    <div class="preloader">
      <div class="cssload-container">
        <svg class="filter" version="1.1">
          <defs>
            <filter id="gooeyness">
              <fegaussianblur in="SourceGraphic" stddeviation="10" result="blur"></fegaussianblur>
              <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 20 -10" result="gooeyness"></fecolormatrix>
              <fecomposite in="SourceGraphic" in2="gooeyness" operator="atop"></fecomposite>
            </filter>
          </defs>
        </svg>
        <div class="dots">
          <div class="dot mainDot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
        </div>
        <p>Cargando...</p>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
      <!-- Page header-->
     <?php $this->load->view("header");?>
      <!-- Parallax header-->
      <section>
        <section class="section parallax-container context-dark" data-parallax-img="https://livedemo00.template-help.com/wt_69536/images/parallax-1.jpg">
          <div class="parallax-content parallax-header">
            <div class="parallax-header__inner context-dark">
              <div class="parallax-header__content">
                <div class="container">
                  <div class="row justify-content-sm-center">
                    <div class="col-md-10 col-xl-8">
                      <h2 class="heading-decorated">Privacy Policy</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!-- Privacy Policy-->
      <section class="section-md bg-default">
        <div class="container">
          <!-- Accordion-->
          <div id="accordion" role="tablist">
            <!-- Bootstrap card-->
            <div class="card card-custom card-classic">
              <div class="card-custom-heading" id="accordionHeading1" role="tab">
                <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse1" aria-controls="accordionCollapse1">General information</a>
                </h5>
              </div>
              <div class="card-custom-collapse collapse" id="accordionCollapse1" role="tabpanel" aria-labelledby="accordionHeading1">
                <div class="card-custom-body">
                  <p>Welcome to our Privacy Policy page! When you use our web site services, you trust us with your information. This Privacy Policy is meant to help you understand what data we collect, why we collect it, and what we do with it. When you share information with us, we can make our services even better for you. For instance, we can show you more relevant search results and ads, help you connect with people or to make sharing with others quicker and easier. As you use our services, we want you to be clear how we’re using information and the ways in which you can protect your privacy. This is important; we hope you will take time to read it carefully. Remember, you can find controls to manage your information and protect your privacy and security. We’ve tried to keep it as simple as possible.</p>
                </div>
              </div>
            </div>
            <!-- Bootstrap card-->
            <div class="card card-custom card-classic">
              <div class="card-custom-heading" id="accordionHeading2" role="tab">
                <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse2" aria-controls="accordionCollapse2">Right to access, correct and delete data and to object to data processing</a>
                </h5>
              </div>
              <div class="card-custom-collapse collapse" id="accordionCollapse2" role="tabpanel" aria-labelledby="accordionHeading2">
                <div class="card-custom-body">
                  <p>Our customers have the right to access, correct and delete personal data relating to them, and to object to the processing of such data, by addressing a written request, at any time. The Company makes every effort to put in place suitable precautions to safeguard the security and privacy of personal data, and to prevent it from being altered, corrupted, destroyed or accessed by unauthorized third parties. However, the Company does not control each and every risk related to the use of the Internet, and therefore warns the Site users of the potential risks involved in the functioning and use of the Internet. The Site may include links to other web sites or other internet sources. As the Company cannot control these web sites and external sources, the Company cannot be held responsible for the provision or display of these web sites and external sources, and may not be held liable for the content, advertising, products, services or any other material available on or from these web sites or external sources.</p>
                </div>
              </div>
            </div>
            <!-- Bootstrap card-->
            <div class="card card-custom card-classic">
              <div class="card-custom-heading" id="accordionHeading3" role="tab">
                <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse3" aria-controls="accordionCollapse3">Management of personal data</a>
                </h5>
              </div>
              <div class="card-custom-collapse collapse" id="accordionCollapse3" role="tabpanel" aria-labelledby="accordionHeading3">
                <div class="card-custom-body">
                  <p>You can view or edit your personal data online for many of our services. You can also make choices about our collection and use of your data. How you can access or control your personal data will depend on which services you use. You can choose whether you wish to receive promotional communications from our web site by email, SMS, physical mail, and telephone. If you receive promotional email or SMS messages from us and would like to opt out, you can do so by following the directions in that message. You can also make choices about the receipt of promotional email, telephone calls, and postal mail by visiting and signing into Company Promotional Communications Manager, which allows you to update contact information, manage contact preferences, opt out of email subscriptions, and choose whether to share your contact information with our partners. These choices do not apply to mandatory service communications that are part of certain web site services.</p>
                </div>
              </div>
            </div>
            <!-- Bootstrap card-->
            <div class="card card-custom card-classic">
              <div class="card-custom-heading" id="accordionHeading4" role="tab">
                <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse4" aria-controls="accordionCollapse4">Information We Collect</a>
                </h5>
              </div>
              <div class="card-custom-collapse collapse" id="accordionCollapse4" role="tabpanel" aria-labelledby="accordionHeading4">
                <div class="card-custom-body">
                  <p>Our store collects data to operate effectively and provide you the best experiences with our services. You provide some of this data directly, such as when you create a personal account. We get some of it by recording how you interact with our services by, for example, using technologies like cookies, and receiving error reports or usage data from software running on your device. We also obtain data from third parties (including other companies). For example, we supplement the data we collect by purchasing demographic data from other companies. We also use services from other companies to help us determine a location based on your IP address in order to customize certain services to your location. The data we collect depends on the services and features you use.</p>
                </div>
              </div>
            </div>
            <!-- Bootstrap card-->
            <div class="card card-custom card-classic">
              <div class="card-custom-heading" id="accordionHeading5" role="tab">
                <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse5" aria-controls="accordionCollapse5">How We Use Your Information</a>
                </h5>
              </div>
              <div class="card-custom-collapse collapse" id="accordionCollapse5" role="tabpanel" aria-labelledby="accordionHeading5">
                <div class="card-custom-body">
                  <p>Our web site uses the data we collect for three basic purposes: to operate our business and provide (including improving and personalizing) the services we offer, to send communications, including promotional communications, and to display advertising. In carrying out these purposes, we combine data we collect through the various web site services you use to give you a more seamless, consistent and personalized experience. However, to enhance privacy, we have built in technological and procedural safeguards designed to prevent certain data combinations. For example, we store data we collect from you when you are unauthenticated (not signed in) separately from any account information that directly identifies you, such as your name, email address or phone number.</p>
                </div>
              </div>
            </div>
            <!-- Bootstrap card-->
            <div class="card card-custom card-classic">
              <div class="card-custom-heading" id="accordionHeading6" role="tab">
                <h5 class="card-custom-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordionCollapse6" aria-controls="accordionCollapse6">Sharing Your Information</a>
                </h5>
              </div>
              <div class="card-custom-collapse collapse" id="accordionCollapse6" role="tabpanel" aria-labelledby="accordionHeading6">
                <div class="card-custom-body">
                  <p>We share your personal data with your consent or as necessary to complete any transaction or provide any service you have requested or authorized. For example, we share your content with third parties when you tell us to do so. When you provide payment data to make a purchase, we will share payment data with banks and other entities that process payment transactions or provide other financial services, and for fraud prevention and credit risk reduction. In addition, we share personal data among our controlled affiliates and subsidiaries. We also share personal data with vendors or agents working on our behalf for the purposes described in this statement. For example, companies we've hired to provide customer service support or assist in protecting and securing our systems and services may need access to personal data in order to provide those functions. In such cases, these companies must abide by our data privacy and security requirements and are not allowed to use personal data they receive from us for any other purpose. We may also disclose personal data as part of a corporate transaction such as a merger or sale of assets.</p>
                </div>
              </div>
            </div><a href="mailto:#">privacy@demolink.org</a>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <section class="pre-footer-corporate bg-image-7 bg-overlay-darkest">
        <div class="container">
          <div class="row justify-content-sm-center justify-content-lg-start row-30 row-md-60">
            <div class="col-sm-10 col-md-6 col-lg-10 col-xl-3"><a class="brand" href="index.html"><img src="images/logo-white-108x40.png" alt="" width="108" height="40" srcset="images/logo-white-216x80.png 2x"/></a>
              <p>theFutre is HTML template that fits for both developers and beginners. It comes loaded with an assortment of tools and features that make customization process much easier. A pack of child themes, specially designed for various business niches, allows users to create a fully functional site for any specific business quickly and worry-free.</p>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-3 col-xl-3">
              <h6>Navigation</h6>
              <ul class="list-xxs list-primary">
                <li><a href="#">What We Offer </a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Our Portfolio</a></li>
                <li><a href="#">Latest Posts</a></li>
                <li><a href="#">Clients</a></li>
              </ul>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4 col-xl-3">
              <h6>Contacts</h6>
              <ul class="list-xs">
                <li>
                  <dl class="list-terms-minimal">
                    <dt>Address</dt>
                    <dd>4578 Marmora Road, Glasgow, D04 89GR</dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal">
                    <dt>Phones</dt>
                    <dd>
                      <ul class="list-semicolon">
                        <li><a href="tel:#">(800) 123-0045</a></li>
                        <li><a href="tel:#">(800) 123-0045</a></li>
                      </ul>
                    </dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal">
                    <dt>E-mail</dt>
                    <dd><a class="link-primary" href="mailto:#">info@demolink.org</a></dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-terms-minimal">
                    <dt>We are open</dt>
                    <dd>Mn-Fr: 10 am-8 pm</dd>
                  </dl>
                </li>
              </ul>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-5 col-xl-3">
              <div class="google-map-footer">
                <!-- RD Google Map-->
                <div class="google-map-container" data-zoom="5" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
                  <div class="google-map"></div>
                  <ul class="google-map-markers">
                    <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     <?php $this->load->view("footer");?> 
    </div>
    <!-- Javascript-->
    <script src="<?php echo site_url().'static/page_front/js/core.min.js';?>"></script>
    <script src="<?php echo site_url().'static/page_front/js/script.js';?>"></script>
  </body>
</html>