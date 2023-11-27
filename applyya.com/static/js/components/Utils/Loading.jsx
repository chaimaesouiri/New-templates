import React from "react";

const Loading = ({ width = "40px", height = "20px", className }) => {
  return (
    <svg
      width={width}
      height={height}
      className={className}
      xmlns="http://www.w3.org/2000/svg"
      xmlnsXlink="http://www.w3.org/1999/xlink"
      viewBox="30 30 30 30"
      preserveAspectRatio="xMidYMid">
      <circle cx="36" cy="49.6192" r="4" fill="#4d89ff">
        <animate
          attributeName="cy"
          calcMode="spline"
          keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5"
          repeatCount="indefinite"
          values="55;45;55;55"
          keyTimes="0;0.25;0.5;1"
          dur="1.5s"
          begin="-0.75s"
        />
      </circle>
      <circle cx="50" cy="45.1401" r="4" fill="#e4e4e4">
        <animate
          attributeName="cy"
          calcMode="spline"
          keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5"
          repeatCount="indefinite"
          values="55;45;55;55"
          keyTimes="0;0.25;0.5;1"
          dur="1.5s"
          begin="-0.5s"
        />
      </circle>
      <circle cx="64" cy="46.7275" r="4" fill="#8baeec">
        <animate
          attributeName="cy"
          calcMode="spline"
          keySplines="0 0.5 0.5 1;0.5 0 1 0.5;0.5 0.5 0.5 0.5"
          repeatCount="indefinite"
          values="55;45;55;55"
          keyTimes="0;0.25;0.5;1"
          dur="1.5s"
          begin="-0.25s"
        />
      </circle>
    </svg>
  );
};

export default Loading;
