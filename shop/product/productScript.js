let gsapTimeLine = gsap.timeline()

gsapTimeLine.from('body', {opacity: 0, duration: 1, y: -10, stragger: 0.25})

gsapTimeLine.from('.photoModel', {opacity: 0, duration: 1, y: -10, stragger: 0.25})
// gsapTimeLine.from('.allText', {opacity: 0, duration: 1, y: -10, stragger: 0.25})
gsapTimeLine.from('#table', {opacity: 0, duration: 1, y: -10, stragger: 0.25})


