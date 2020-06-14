$(window).on('load', function(){
    setTimeout(function(){
        $('.loading').fadeOut("slow", function(){
            $('.loading').remove();
        });
    }, 500)
})


function getFollowers(followers){
    new Vue({
        el: "#instagram-followers",
        data: {
            followers: followers
        }
    })
}

$(document).ready(function(){
    $.ajax({
        url: "https://www.instagram.com/thalassante/?__a=1",
        success: function(data){
            result = data.graphql.user.edge_followed_by.count;
            getFollowers(result);
        }
    })
})
new Vue({
    el: "#components-demo"
})
// var followers = 0;
// var ctx = document.getElementById('myChart').getContext('2d');
// var a = randomise(200);
// var b = randomise(200);
// var c = randomise(200);
// var d = randomise(200);
// var ctx = document.getElementById('myChart').getContext('2d');
// var myChart = new Chart(ctx, {
// type: 'doughnut',
// data: {
//     labels: ['Youtube', 'Twitter', 'Instagram', 'Facebook'],
//     datasets: [{
//         label: 'Followers',
//         data: [a, b, followers, d],
//         backgroundColor: [
//             'rgba(255, 99, 132, 1)',
//             'cyan',
//             'pink',
//             'blue',
//         ]
//     }]
// },
// options: {
//     scales: {
//         yAxes: [{
//             ticks: {
//                 display: false
//             },
//             gridLines: {
//                 display: false
//             }
//         }]
//     }
// }
// });