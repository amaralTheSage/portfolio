import React, { useCallback } from "react";
import useEmblaCarousel from "embla-carousel-react";
import Autoplay from "embla-carousel-autoplay";
import { ChevronLeft, ChevronRight } from "react-feather";

export default function Carousel({ imgs }) {
    const [emblaRef, emblaApi] = useEmblaCarousel({ loop: true }, [
        Autoplay({ delay: 5000 }),
    ]);

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

            <div className="w-full px-5 absolute top-[45%] gap-2 flex justify-between">
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
        </div>
    );
}
