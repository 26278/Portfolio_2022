var amAni = gsap.timeline({ paused: true, repeat: -1 });

amAni.to('.am-figure__image', .5, { left: '20%', delay: 5, ease: 'power1.out' });
amAni.to('.am-figure__image--2', .5, { opacity: 1 }, '-=.5');
amAni.to('.am-header__rectangle', .5, { top: 'calc(80vw / 47 * 63 - 3em)', ease: 'power1.out' }, '-=.8');
amAni.to('.am-figure__image', .5, { opacity: 1, left: 0, ease: 'power1.out', delay: 5 });
amAni.to('.am-header__rectangle', .5, { top: '1em', ease: 'power1.out' });
amAni.to('.am-figure__image--2', .5, { opacity: 0 }, '-=.5');

window.onload = () => {
    amAni.play();
};
