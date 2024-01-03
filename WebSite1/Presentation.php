<?php

include('include/header.php');

?>

<!--about-->
<div class="buttom-header-sub">
    <div class="container">
        <div class="sub-page">
            <h2 class="txt-about">Presentation</h2>
        </div>
    </div>
</div>
<main class="main" id="main">
    <div class="container">
        <div class="content-sub-about">
            <img src="" alt="">

            <h2><span>Null data warehouse</span></h2>

            <p>
                A data warehouse is a central repository of information that can be analyzed to make more informed
                decisions. Data flows into a data warehouse from transactional systems, relational databases, and other
                sources, typically on a regular cadence

            </p>
        </div>
        
    </div>
    
</main>

<!--end about-->
<script src="http://localhost:8080/jasperserver-pro/client/visualize.js"></script>
<div id="container"></div> 
<script>
visualize(
  /* 
  please uncomment and use your credentials for testing 
  {auth: {
  name: "******",
  password: "*******"
  }},
  */ 
  function (v) { 
    v("#container").report({ 
      resource: "/Ad_Hoc_View_olap_cube_university_Report_1_by_cycle", 
      error: function(e) { 
        alert(e); 
      } 
    }); 
  });
</script>
<script src="http://localhost:8080/jasperserver-pro/client/visualize.js"></script>
<div id="container2"></div> 
<script>
visualize(
  /* 
  please uncomment and use your credentials for testing 
  {auth: {
  name: "******",
  password: "*******"
  }},
  */ 
  function (v) { 
    v("#container2").report({ 
      resource: "/public/Ad_Hoc_View_Report_by_year", 
      error: function(e) { 
        alert(e); 
      } 
    }); 
  });
</script>
<script src="http://localhost:8080/jasperserver-pro/client/visualize.js"></script>
<div id="container3"></div> 
<script>
visualize(
  /* 
  please uncomment and use your credentials for testing 
  {auth: {
  name: "******",
  password: "*******"
  }},
  */ 
  function (v) { 
    v("#container3").report({ 
      resource: "/public/Ad_Hoc_View_Report_Total_grades_for_each_year.", 
      error: function(e) { 
        alert(e); 
      } 
    }); 
  });
</script>
<script src="http://localhost:8080/jasperserver-pro/client/visualize.js"></script>
<div id="container4"></div> 
<script>
visualize(
  /* 
  please uncomment and use your credentials for testing 
  {auth: {
  name: "******",
  password: "*******"
  }},
  */ 
  function (v) { 
    v("#container4").report({ 
      resource: "/public/Ad_Hoc_View_Report_Students_Degrees_by_university_years_Specialisation.", 
      error: function(e) { 
        alert(e); 
      } 
    }); 
  });
</script>
<script src="http://localhost:8080/jasperserver-pro/client/visualize.js"></script>
<div id="container5"></div> 
<script>
visualize(
  /* 
  please uncomment and use your credentials for testing 
  {auth: {
  name: "******",
  password: "*******"
  }},
  */ 
  function (v) { 
    v("#container5").report({ 
      resource: "/public/Ad_Hoc_View_Report_Number_of_university_baccalaureate_disciplines_by_year", 
      error: function(e) { 
        alert(e); 
      } 
    }); 
  });
</script>
<script src="http://localhost:8080/jasperserver-pro/client/visualize.js"></script>
<div id="container6"></div> 
<script>
visualize(
  /* 
  please uncomment and use your credentials for testing 
  {auth: {
  name: "******",
  password: "*******"
  }},
  */ 
  function (v) { 
    v("#container6").report({ 
      resource: "/public/Ad_Hoc_View_Report_Number_of_males_and_females_by_year_and_cycel", 
      error: function(e) { 
        alert(e); 
      } 
    }); 
  });
</script>
<script src="http://localhost:8080/jasperserver-pro/client/visualize.js"></script>
<div id="container7"></div> 
<script>
visualize(
  /* 
  please uncomment and use your credentials for testing 
  {auth: {
  name: "******",
  password: "*******"
  }},
  */ 
  function (v) { 
    v("#container7").report({ 
      resource: "/public/Ad_Hoc_View_Report_Number_of_males_and_females_by_year", 
      error: function(e) { 
        alert(e); 
      } 
    }); 
  });
</script>
<script src="http://localhost:8080/jasperserver-pro/client/visualize.js"></script>
<div id="container8"></div> 
<script>
visualize(
  /* 
  please uncomment and use your credentials for testing 
  {auth: {
  name: "******",
  password: "*******"
  }},
  */ 
  function (v) { 
    v("#container8").report({ 
      resource: "/public/Ad_Hoc_View_Report_Material_rate_by_year", 
      error: function(e) { 
        alert(e); 
      } 
    }); 
  });
</script>
<script src="http://localhost:8080/jasperserver-pro/client/visualize.js"></script>
<div id="container9"></div> 
<script>
visualize(
  /* 
  please uncomment and use your credentials for testing 
  {auth: {
  name: "******",
  password: "*******"
  }},
  */ 
  function (v) { 
    v("#container9").report({ 
      resource: "/public/Ad_Hoc_View_Report__Unit_rate_by_year", 
      error: function(e) { 
        alert(e); 
      } 
    }); 
  });
</script>
<script src="http://localhost:8080/jasperserver-pro/client/visualize.js"></script>
<div id="container11"></div> 
<script>
visualize(
  /* 
  please uncomment and use your credentials for testing 
  {auth: {
  name: "******",
  password: "*******"
  }},
  */ 
  function (v) { 
    v("#container11").report({ 
      resource: "/olap_view_Report", 
      error: function(e) { 
        alert(e); 
      } 
    }); 
  });
</script>
<?php

include('include/footer.php');

?>

<!-- ==== ANIMATE ON SCROLL JS CDN -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- ==== GSAP CDN ==== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<!-- ==== SCRIPT.JS ==== -->
<script src="./js/app.js"></script>
</body>

</html>