export default interface IMedia {
    title: string;
    synopsis?: string;
    type: "movie" | "series";
    duration: number;
    year: number;
    genres: string | string[];
    imgSrc: {horizontal: string, vertical: string};
}