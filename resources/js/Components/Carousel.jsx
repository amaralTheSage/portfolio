import React, { useCallback } from "react";
import useEmblaCarousel from "embla-carousel-react";
import Autoplay from "embla-carousel-autoplay";
import { ChevronLeft, ChevronRight, Circle } from "react-feather";
import { DotButton, useDotButton } from "./DotButton";

export default function Carousel({ imgs }) {
    const [emblaRef, emblaApi] = useEmblaCarousel({ loop: true }, [
        Autoplay({ delay: 5000 }),
    ]);

    const { selectedIndex, scrollSnaps, onDotButtonClick } =
        useDotButton(emblaApi);

    const scrollPrev = useCallback(() => {
        if (emblaApi) emblaApi.scrollPrev();
    }, [emblaApi]);

    const scrollNext = useCallback(() => {
        if (emblaApi) emblaApi.scrollNext();
    }, [emblaApi]);

    return (
        <div className="embla m-auto relative ">
            <div className="embla__viewport" ref={emblaRef}>
                <div className="embla__container ">
                    {imgs.map((img) => {
                        return (
                            <>
                                <img
                                    key={img.id}
                                    src={img.url}
                                    className="embla__slide mx-4 w-full object-cover aspect-video rounded-md"
                                />
                            </>
                        );
                    })}
                </div>
            </div>

            <div className="w-full px-5 absolute top-[45%] gap-2 justify-between hidden sm:flex">
                <button
                    className="embla__prev bg-black p-1 border-gray-700 border rounded-full "
                    onClick={scrollPrev}
                >
                    <div className="relative right-px">
                        <ChevronLeft />
                    </div>
                </button>
                <button
                    className="embla__next bg-black border-gray-700 border p-1 rounded-full"
                    onClick={scrollNext}
                >
                    <div className="relative left-px">
                        <ChevronRight />
                    </div>
                </button>
            </div>

            {/* DOTS */}
            <div className="embla__dots m-auto w-fit">
                {imgs.map((_, index) => (
                    <DotButton
                        key={index}
                        onClick={() => onDotButtonClick(index)}
                        className={"embla__dot".concat(
                            index === selectedIndex
                                ? " embla__dot--selected"
                                : ""
                        )}
                    />
                ))}
            </div>
        </div>
    );
}
