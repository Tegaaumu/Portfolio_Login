gsap.registerPlugin(ScrollTrigger)

gsap.from('.animate-header', {
    duration: 2.6,
    opacity: 0,
    x: -150,
    stagger:0.5
});

gsap.from('.animate-hedimg', {
    duration: 2.6,
    opacity: 0,
    x: 150,
});
gsap.from('.animate-about', {
    scrollTrigger:'.animate-yy',
    duration: 0.8,
    opacity: 0,
    y: -120,
    stagger:0.4
});
gsap.from('.animate-work', {
    scrollTrigger:'.animate-work',
    duration: 0.8,
    opacity: 1,
    y: -120,
    stagger:0.4
});
gsap.from('.animate-card', {
    scrollTrigger:'.animate-card',
    duration: 1.0,
    opacity: 0,
    y: -130,
    stagger: 0.7
});
gsap.from('.barss1', {
    scrollTrigger:'.barss1',
    duration: 0.5,
    opacity: 0,
    x: 40,
    stagger: 0.4,
    delay: 0.9
});
gsap.from('.mails', {
    scrollTrigger:'.mails',
    duration: 0.9,
    opacity: 0,
    x: -40,
    stagger: 0.4,
    delay: 1
});

