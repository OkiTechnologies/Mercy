<template>
  <div class="gc_fliter_main_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="gc_filter_heading_wrapper">
            <div class="gc_filter_heading">
              <h2>Keep your <span class="">Hope Alive</span></h2>
              <h1>Photo Gallery</h1>
            </div>
          </div>
        </div>

        <div class="portfolio-area ptb-100">
          <div class="container">
            <!-- Filters -->
            <div class="portfolio-filter clearfix text-center">
              <ul class="list-inline" id="filter">
                <li><a class="active" data-group="all">All</a></li>
                <li><a data-group="business">Christmas</a></li>
                <li><a data-group="website"> Holy Week</a></li>
                <li><a data-group="logo"> Church </a></li>
                <li><a data-group="business"> Event </a></li>
                <li><a data-group="website"> Pastors </a></li>
              </ul>
            </div>

            <div class="row three-column">
              <div id="gridWrapper" class="clearfix">
                <div
                  class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column"
                  data-groups='["all", "website", "logo"]'
                >
                  <div class="portfolio-thumb">
                    <div class="gc_filter_cont_overlay_wrapper">
                      <img
                        :src="asset + 'images/content/gallery/filter_img1.jpg'"
                        class="zoom image img-responsive"
                        alt="service_img"
                      />
                      <div class="gc_filter_cont_overlay">
                        <div class="gc_filter_text">
                          <a :href="asset + 'images/content/gallery/filter_img1.jpg'"
                            ><i class="fa fa-plus"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.portfolio-thumb -->
                </div>

                <div
                  class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column"
                  data-groups='["all", "business", "website", "photoshop"]'
                >
                  <div class="portfolio-thumb">
                    <div class="gc_filter_cont_overlay_wrapper">
                      <img
                        :src="asset + 'images/content/gallery/filter_img2.jpg'"
                        class="zoom image img-responsive"
                        alt="service_img"
                      />
                      <div class="gc_filter_cont_overlay">
                        <div class="gc_filter_text">
                          <a :href="asset + 'images/content/gallery/filter_img2.jpg'"
                            ><i class="fa fa-plus"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.portfolio-thumb -->
                </div>

                <div
                  class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column"
                  data-groups='["all", "logo", "photoshop"]'
                >
                  <div class="portfolio-thumb">
                    <div class="gc_filter_cont_overlay_wrapper">
                      <img
                        :src="asset + 'images/content/gallery/filter_img3.jpg'"
                        class="zoom image img-responsive"
                        alt="service_img"
                      />
                      <div class="gc_filter_cont_overlay">
                        <div class="gc_filter_text">
                          <a :href="asset + 'images/content/gallery/filter_img3.jpg'"
                            ><i class="fa fa-plus"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.portfolio-thumb -->
                </div>

                <div
                  class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column"
                  data-groups='["all", "logo", "website", "business"]'
                >
                  <div class="portfolio-thumb">
                    <div class="gc_filter_cont_overlay_wrapper">
                      <img
                        :src="asset + 'images/content/gallery/filter_img4.jpg'"
                        class="zoom image img-responsive"
                        alt="service_img"
                      />
                      <div class="gc_filter_cont_overlay">
                        <div class="gc_filter_text">
                          <a :href="asset + 'images/content/gallery/filter_img4.jpg'"
                            ><i class="fa fa-plus"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.portfolio-thumb -->
                </div>

                <div
                  class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column"
                  data-groups='["all", "business", "website", "photoshop"]'
                >
                  <div class="portfolio-thumb">
                    <div class="gc_filter_cont_overlay_wrapper">
                      <img
                        :src="asset + 'images/content/gallery/filter_img5.jpg'"
                        class="zoom image img-responsive"
                        alt="service_img"
                      />
                      <div class="gc_filter_cont_overlay">
                        <div class="gc_filter_text">
                          <a :href="asset + 'images/content/gallery/filter_img5.jpg'"
                            ><i class="fa fa-plus"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.portfolio-thumb -->
                </div>

                <div
                  class="col-xs-12 col-sm-6 col-md-4 portfolio-wrapper III_column"
                  data-groups='["all", "business", "website", "logo"]'
                >
                  <div class="portfolio-thumb">
                    <div class="gc_filter_cont_overlay_wrapper">
                      <img
                        :src="asset + 'images/content/gallery/filter_img6.jpg'"
                        class="zoom image img-responsive"
                        alt="service_img"
                      />
                      <div class="gc_filter_cont_overlay">
                        <div class="gc_filter_text">
                          <a :href="asset + 'images/content/gallery/filter_img6.jpg'"
                            ><i class="fa fa-plus"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.portfolio-thumb -->
                </div>
              </div>
              <!--/#gridWrapper-->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="gc_filter_btn">
                  <ul>
                    <li><a href="#">View All</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      app: this.$page.props.app,
      asset: this.$page.props.app.asset + '/guest/'
      // testimonies: Object
    };
  }
};
</script>
