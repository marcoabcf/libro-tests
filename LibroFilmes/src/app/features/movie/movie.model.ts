export class GenreMovie {
  id: number;
  name: string;

  constructor(id: number, name: string) {
    this.id = id;
    this.name = name;
  }
}

export class Movie {
  id: number;
  title: string;
  budget: number;
  image?: string;
  revenue: number;
  runtime: number;
  overview: string;
  popularity: number;
  poster_path: string;
  genres: GenreMovie[];
  release_date: string;
  vote_average: number;
  backdrop_path: string;
  backdrop_image?: string;
  original_language: string;

  constructor(
    id: number,
    title: string,
    budget: number,
    runtime: number,
    revenue: number,
    overview: string,
    popularity: number,
    poster_path: string,
    genres: GenreMovie[],
    release_date: string,
    vote_average: number,
    backdrop_path: string,
    original_language: string,
    image?: string,
    backdrop_image?: string
  ) {
    this.id = id;
    this.title = title;
    this.image = image;
    this.budget = budget;
    this.revenue = revenue;
    this.runtime = runtime;
    this.overview = overview;
    this.genres = genres ?? [];
    this.popularity = popularity;
    this.poster_path = poster_path;
    this.release_date = release_date;
    this.backdrop_path = backdrop_path;
    this.backdrop_image = backdrop_image;
    this.vote_average = vote_average ?? 0;
    this.original_language = original_language;
  }
}
