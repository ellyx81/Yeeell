import Splide from '@splidejs/splide';
const slider = () => {
	new Splide( '.splide', {
		type: 'loop',
		speed: 600,
	}
	).mount();
}
  
export default slider