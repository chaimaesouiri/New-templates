import React, { PureComponent } from 'react';
import SlickSlider from 'react-slick';

import SliderNextArrow from './SliderNextArrow';
import SliderPrevArrow from './SliderPrevArrow';

import template1Image from '../../assets/images/templates/template_1.jpg';
import template1ImageWebp from '../../assets/images/templates/template_1.webp';
import template2Image from '../../assets/images/templates/template_2.jpg';
import template2ImageWebp from '../../assets/images/templates/template_2.webp';
import template3Image from '../../assets/images/templates/template_3.jpg';
import template3ImageWebp from '../../assets/images/templates/template_3.webp';
import WebpImage from '../../components/Utils/WebpImage';

require('slick-carousel/slick/slick.css');
require('slick-carousel/slick/slick-theme.css');
require('../../assets/css/landing/slick.css');

export class Slider extends PureComponent {
  render() {
    const settings = {
      infinite: true,
      slickPlay: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      centerMode: true,
      centerPadding: '0',
      arrows: true,
      prevArrow: <SliderNextArrow areaLabel="Previous" />,
      nextArrow: <SliderPrevArrow areaLabel="Next" />,
      responsive: [
        {
          breakpoint: 540,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: false,
          },
        },
      ],
    };

    return (
      <SlickSlider className="slider" {...settings}>
        <div className="slider__item">
          <WebpImage src={template3Image} webp={template3ImageWebp} alt="Resume template by Applyya.com" />
        </div>
        <div className="slider__item">
          <WebpImage src={template2Image} webp={template2ImageWebp} alt="Resume template by Applyya.com" />
        </div>
        <div className="slider__item">
          <WebpImage src={template3Image} webp={template3ImageWebp} alt="Resume template by Applyya.com" />
        </div>
        <div className="slider__item">
          <WebpImage src={template1Image} webp={template1ImageWebp} alt="Resume template by Applyya.com" />
        </div>
      </SlickSlider>
    );
  }
}

export default Slider;
