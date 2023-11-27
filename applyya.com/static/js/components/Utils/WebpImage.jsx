import React from 'react';

const WebpImage = ({
  src, webp, alt, title, style, className,
}) => {
  const sourceExt = src.split('.').pop();

  return (
    <picture>
      <source type="image/webp" srcSet={webp} />
      <source type={`image/${sourceExt}`} srcSet={src} />
      <img src={src} alt={alt} title={title} style={style} className={className} />
    </picture>
  );
};

export default WebpImage;
